<?php

namespace App\Http\Controllers;

use pagination;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //show All List
    public static function index()
    {
        return view('listing.index', [
            //all -- not use pagination
            // 'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()

            //use pagination -- cek make -- {{ $listings->links() }}
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }
    //show single list
    public static function show(Listing $listing)
    {
        return view('listing.show', [
            'listing' => $listing
        ]);
    }

    //create listing form
    public static function create()
    {
        return view('listing.create');
    }

    // store listing data form
    public static function store(Request $request)
    {
        // dd($request->all());
        $formField = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        // dd($request->hasFile('logo'));
        if ($request->hasFile('logo')) {
            $formField['logo'] = $request->file('logo')->store('logos', 'public');
        }

        //set owner to listing
        $formField['user_id'] = auth()->id();

        Listing::create($formField);
        // dd($formField);

        // Session::flash('message', 'Listing was created!')

        return redirect('/')->with('message', 'listing created succsesfully!');
    }

    // edit data listing
    public static function edit(Listing $listing)
    {
        // dd($listing);
        return view('listing.edit', ['listing' => $listing]);
    }

    //update data listing
    public static function update(Request $request, Listing $listing)
    {
        //make sure logged in user is owner
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unathorized Action (Anda Tidak berhak mengakses aksi ini!)');
        }

        $formField = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formField['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $listing->update($formField);
        return redirect('/')->with('message', 'Iyeu listing created succsesfully!');
    }

    //delete lisitng
    public function destroy(Listing $listing)
    {
        //make sure logged in user is owner
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unathorized Action (Anda Tidak berhak mengakses aksi ini!)');
        }

        // dd($listing);
        $listing->delete();
        return redirect('/')->with('message', 'List was deleted successfully');
    }

    //manage listing
    public function manage()
    {
        return view('listing.manage', ['listings' => auth()->user()->listing()->get()]);
    }
}