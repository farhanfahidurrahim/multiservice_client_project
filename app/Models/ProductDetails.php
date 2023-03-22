<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'shop_id',
        'product_name',
        'product_details',
        'image',
    ];

    public function shopname()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }
}
