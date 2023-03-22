<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Islamic;
use Illuminate\Support\Str;

class IslamicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $data=Islamic::all();
        return view('islamic.index',compact('data'));
    }

    public function create()
    {
        return view('islamic.create');
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
            $file->move(public_path('images/islamic/'), $filename);
            $path="images/islamic/$filename";

            $data['image']=$path;
        }

        Islamic::create($data);
        return redirect()->route('islamic.index');
    }

    public function edit(Hotel $id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        $data=Islamic::FindorFail($id);
        @unlink(public_path('/'.$data->image));
        $data->delete();

        return redirect()->back();
    }
}
