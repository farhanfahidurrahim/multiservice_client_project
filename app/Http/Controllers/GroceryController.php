<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Models\Grocery;
use App\Models\GroceryProductDetail;
use Illuminate\Support\Str;

class GroceryController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $data=Grocery::all();
        return view('grocery.index',compact('data'));
    }

    public function create()
    {
        return view('grocery.create');
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
            $file->move(public_path('images/grocery/'), $filename);
            $path="images/grocery/$filename";

            $data['image']=$path;
        }

        Grocery::create($data);
        return redirect()->route('grocery.index');
    }

    public function edit(Hotel $id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        $data=Grocery::FindorFail($id);
        @unlink(public_path('/'.$data->image));
        $data->delete();

        return redirect()->back();
    }

    public function view($id)
    {
        $shopView=Grocery::FindorFail($id)->first();
        return view('shop.view',compact('shopView')); 
    }

    public function indexPD()
    {   
        $data=GroceryProductDetail::all();
        return view('Grocery.indexpd',compact('data'));
    }

    public function addPD()
    {   
        $joinData=Grocery::all();
        return view('Grocery.createpd',compact('joinData'));
    }

    public function storePD(Request $request)
    {   
        //dd($request->all());
        $data=array();
        $data['grocery_id']=$request->grocery_id;
        $data['product_name']=$request->product_name;
        $data['product_details']=$request->product_details;

        $slug=Str::slug($request->product_name, '-');

        if ($request->hasFile('image')) {

            $file=$request->file('image');
            $filename=$slug.'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/grocery/'), $filename);
            $path="images/grocery/$filename";

            $data['image']=$path;
        }

        GroceryProductDetail::create($data);
        return redirect()->route('grocery.productdetails.index');
    }

    public function destroyPD($id)
    {
        $data=GroceryProductDetail::FindorFail($id);
        @unlink(public_path('/'.$data->image));
        $data->delete();

        return redirect()->back();
    }
}

