<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\User;  

use Illuminate\Http\Request;

class CreateController extends Controller
{

    public function create()
    {

        $data=User::where('usertype',0)->get();
        return view('create', ['data'=> $data]);

         
       
    }


    public function store(Request $request)
    {
       // dd($request);
       // $request->dd();
       
       $post=new Project();

       
       $post->project_type=$request->project_type;
       $post->user_id=$request->user_id;
       $post->save();
       return redirect()->back()->with('status','Project Created Successfully');
    }
}
