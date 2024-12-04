<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;

class DashboardController extends Controller
{
    public function index()
    {
        return view('index', [
            "wishlists"=> auth()->user()->wishlists
        ]);
    }

    public function create()
    {
        return view('create-wishlist');
    }


    public function store()
    {
        # code...
    }
}
