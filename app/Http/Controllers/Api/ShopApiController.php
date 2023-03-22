<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;

class ShopApiController extends Controller
{
    public function index()
    {
        $data=Shop::all();

        return response()->json([
            'All Shop List'=>$data,
        ]);
    }

    public function viewShop($id)
    {
        $data=Shop::FindorFail($id)->with('product_details')->get();

        return response()->json([
            'View Single Shop'=>$data,
        ]);
    }
}
