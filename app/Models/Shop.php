<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone_number',
        'website_link',
        'notice',
        'rating',
        'image',
    ];

    public function product_details()
    {
        return $this->hasMany(ProductDetails::class,'shop_id');
    }
}
