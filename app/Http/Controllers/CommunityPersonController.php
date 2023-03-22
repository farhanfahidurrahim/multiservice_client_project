<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommunityPerson;
use Illuminate\Support\Str;

class CommunityPersonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $data=CommunityPerson::all();
        return view('communityperson.index',compact('data'));
    }

    public function create()
    {
        return view('communityperson.create');
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
            $file->move(public_path('images/communityperson/'), $filename);
            $path="images/communityperson/$filename";

            $data['image']=$path;
        }

        CommunityPerson::create($data);
        return redirect()->route('communityperson.index');
    }

    public function edit(Hotel $id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        $data=CommunityPerson::FindorFail($id);
        @unlink(public_path('/'.$data->image));
        $data->delete();

        return redirect()->back();
    }
}
