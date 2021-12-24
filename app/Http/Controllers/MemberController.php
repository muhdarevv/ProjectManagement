<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;  
use App\Models\Member;

class MemberController extends Controller
{
    public function member($id)
    {
        $data=Member::find($id);
        $projectid = $id;
        return view("member",['projectid'=>$projectid],['project_id'=>$data]);
      
        //$member=Member::find($id);
        //return view('member',compact('member'));
        
    }

    public function memberstore(Request $request)
    {
        $data=new Member;
        $data->project_id=$request->input('project_id');
        $data->member_name=$request->input('member_name');  
        $data->save();
        return redirect()->back()->with('result','Member Added Successfully');

    }

    public function memberview($id)
    {
        $data=Member::where('project_id',$id)->get();
        return view ('memberview',['projectid'=>$data]);
    }

    public function memberdelete($id)
    {
        $data=Member::find($id);
        $data->delete();
        return redirect()->back()->with('result','Member Deleted Successfully');
    }
}
