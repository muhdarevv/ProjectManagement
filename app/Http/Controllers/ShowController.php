<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;  
use App\Models\Member;

class ShowController extends Controller
{


    public function show()
    {
        $data= Project::all();
        return view('show',['projects'=>$data]);
    }

    public function showmember()
    {
        $data2= Member::all();
        return view('showmember',['members'=>$data2]);
    }


}
