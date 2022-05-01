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
            'heading' => 'Laragigs ini pasing data from route',
            'listings' => Listing::all()
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