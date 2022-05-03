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
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(2)
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
        Listing::create($formField);

        // Session::flash('message', 'Listing was created!')

        return redirect('/')->with('message', 'listing created succsesfully!');
    }
}