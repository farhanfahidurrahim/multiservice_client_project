<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroceryProductDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'grocery_id',
        'product_name',
        'product_details',
        'image',
    ];

    public function groceryname()
    {
        return $this->belongsTo(Grocery::class, 'grocery_id');
    }
}
