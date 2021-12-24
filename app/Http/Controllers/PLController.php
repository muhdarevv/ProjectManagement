<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;  
use App\Models\Member;

class PLController extends Controller


{
    public function show()
    {
        $userid = Project::where('user_id', '=', Auth::user()->id)->get();
       
        return view ('projectleader', ['users'=>$userid]);
    }

    public function edit($id)
    {
        $project= Project::find($id);
        return view('edit', compact('project'));
    }

    public function update(Request $request , $id)
    {
        $project= Project::find($id);
        $project->id=$request->input('id');
        $project->user_id=$request->input('user_id');
        $project->project_type=$request->input('project_type');
        $project->startdate=$request->input('startdate');
        $project->enddate=$request->input('enddate');
        $project->duration=$request->input('duration');
        $project->cost=$request->input('cost');
        $project->client=$request->input('client');
        $project->status=$request->input('status');
        $project->progress=$request->input('progress');
        $project->update();
        return redirect()->back()->with('result','Project Updated Successfully');


    }
}
