<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone_number',
        'notice',
        'rating',
        'image',
        'fb_link',
        'web_link',
    ];

    // public function product_details()
    // {
    //     return $this->hasMany(ProductDetails::class,'shop_id');
    // }
}
