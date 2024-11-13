<?php

namespace App\Models;

use Database\Factories\WishFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wish extends Model
{
    use HasFactory;

    protected $fillable = ['title' ,'url', 'price', 'wishlist_id'];



     /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory()
    {
        return WishFactory::new();
    }


}
