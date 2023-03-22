<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moneysend;
use Illuminate\Support\Str;

class MoneysendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $data=Moneysend::all();
        return view('moneysend.index',compact('data'));
    }

    public function create()
    {
        return view('moneysend.create');
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

        $slug=Str::slug($request->name, '-');

        if ($request->hasFile('image')) {

            $file=$request->file('image');
            $filename=$slug.'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/moneysend/'), $filename);
            $path="images/moneysend/$filename";

            $data['image']=$path;
        }

        Moneysend::create($data);
        return redirect()->route('moneysend.index');
    }

    public function edit(Hotel $id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        $data=Moneysend::FindorFail($id);
        @unlink(public_path('/'.$data->image));
        $data->delete();

        return redirect()->back();
    }
}
