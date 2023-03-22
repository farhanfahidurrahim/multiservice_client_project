<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantProductDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'restaurant_id',
        'product_name',
        'product_details',
        'image',
    ];

    public function restaurantname()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id');
    }
}
