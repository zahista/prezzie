<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishController extends Controller
{
    public function index(Wishlist $wishlist)
    {
        return view('wishes', ['wishlist' => $wishlist]);
    }

    public function create(Wishlist $wishlist)
    {
        return view('create-wish', ['wishlist'=>$wishlist]);
    }

    public function store()
    {
        # code...
    }
}
