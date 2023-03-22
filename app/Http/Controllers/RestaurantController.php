<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\RestaurantProductDetail;
use Illuminate\Support\Str;

class RestaurantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $data=Restaurant::all();
        return view('restaurant.index',compact('data'));
    }

    public function create()
    {
        return view('restaurant.create');
    }

    public function store(Request $request)
    {   
        //dd($request->all());
        $data=array();
        $data['name']=$request->name;
        $data['address']=$request->address;
        $data['phone_number']=$request->phone_number;
        $data['fb_link']=$request->fb_link;
        $data['web_link']=$request->web_link;
        $data['notice']=$request->notice;
        $data['rating']=$request->rating;

        $slug=Str::slug($request->name, '-');

        if ($request->hasFile('image')) {

            $file=$request->file('image');
            $filename=$slug.'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/restaurant/'), $filename);
            $path="images/restaurant/$filename";

            $data['image']=$path;
        }

        Restaurant::create($data);
        return redirect()->route('restaurant.index');
    }

    public function edit(Hotel $id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        $data=Restaurant::FindorFail($id);
        @unlink(public_path('/'.$data->image));
        $data->delete();

        return redirect()->back();
    }

    public function indexPD()
    {   
        $data=RestaurantProductDetail::all();
        return view('restaurant.indexpd',compact('data'));
    }

    public function createPD()
    {   
        $joinData=Restaurant::all();
        return view('restaurant.createpd',compact('joinData'));
    }

    public function storePD(Request $request)
    {   
        //dd($request->all());
        $data=array();
        $data['restaurant_id']=$request->restaurant_id;
        $data['product_name']=$request->product_name;
        $data['product_details']=$request->product_details;

        $slug=Str::slug($request->product_name, '-');

        if ($request->hasFile('image')) {

            $file=$request->file('image');
            $filename=$slug.'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/restaurant/'), $filename);
            $path="images/restaurant/$filename";

            $data['image']=$path;
        }

        RestaurantProductDetail::create($data);
        return redirect()->route('restaurant.productdetails');
    }

    public function destroyPD($id)
    {
        $data=RestaurantProductDetail::FindorFail($id);
        @unlink(public_path('/'.$data->image));
        $data->delete();

        return redirect()->back();
    }
}
