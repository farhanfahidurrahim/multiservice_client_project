<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsblog;
use Illuminate\Support\Str;

class NewsblogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $data=Newsblog::all();
        return view('newsblog.index',compact('data'));
    }

    public function create()
    {
        return view('newsblog.create');
    }

    public function store(Request $request)
    {   
        //dd($request->all());
        $data=array();
        $data['title']=$request->title;
        $data['description']=$request->description;

        $slug=Str::slug($request->name, '-');

        if ($request->hasFile('image')) {

            $file=$request->file('image');
            $filename=$slug.'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/newsblog/'), $filename);
            $path="images/newsblog/$filename";

            $data['image']=$path;
        }

        Newsblog::create($data);
        return redirect()->route('newsblog.index');
    }

    public function edit(Hotel $id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        $data=Newsblog::FindorFail($id);
        @unlink(public_path('/'.$data->image));
        $data->delete();

        return redirect()->back();
    }
}
