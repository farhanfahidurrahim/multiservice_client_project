<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\ProductDetails;

class ShopController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $data=Shop::all();
        return view('shop.index',compact('data'));
    }

    public function create()
    {
        return view('shop.create');
    }

    public function store(Request $request)
    {   
        //dd($request->all());
        $data=array();
        $data['name']=$request->name;
        $data['address']=$request->address;
        $data['phone_number']=$request->phone_number;
        $data['website_link']=$request->website_link;
        $data['notice']=$request->notice;
        $data['rating']=$request->rating;

        if ($request->hasFile('image')) {

            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/shop/'), $filename);
            $path="images/shop/$filename";

            $data['image']=$path;
        }

        Shop::create($data);
        return redirect()->route('shop.index');
    }

    public function edit(Hotel $id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        $data=Shop::FindorFail($id);
        @unlink(public_path('/'.$data->image));
        $data->delete();

        return redirect()->back();
    }

    public function view($id)
    {
        $shopView=Shop::FindorFail($id)->first();
        return view('shop.view',compact('shopView')); 
    }

    public function indexProductDetails()
    {   
        $data=ProductDetails::all();
        return view('product_details.index',compact('data'));
    }

    public function addProductDetails()
    {   
        $shopData=Shop::all();
        return view('product_details.create',compact('shopData'));
    }

    public function storeProductDetails(Request $request)
    {   
        $data=array();
        $data['shop_id']=$request->shop_id;
        $data['product_name']=$request->product_name;
        $data['product_details']=$request->product_details;

        if ($request->hasFile('image')) {

            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/product_details/'), $filename);
            $path="images/product_details/$filename";

            $data['image']=$path;
        }

        ProductDetails::create($data);
        return redirect()->route('productdetails.index');
    }
}
