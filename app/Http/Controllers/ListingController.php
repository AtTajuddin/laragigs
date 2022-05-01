<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //show All List
    public static function index()
    {
        return view('listing.index', [
            'listings' => Listing::latest()->filter(request(['tag']))->get()
        ]);
    }
    //show single list
    public static function show(Listing $listing)
    {
        return view('listing.show', [
            'listing' => $listing
        ]);
    }
}