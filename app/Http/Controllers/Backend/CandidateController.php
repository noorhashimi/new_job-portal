<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CandidateController extends Controller
{
    public function Index(){
        $candidate = DB::table('candidates')->orderBy('id','desc')->paginate(3);
        return view('Backend.PostJobs.index',compact('candidate'));
    }
}
