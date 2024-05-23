<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class job_typeController extends Controller
{
    public function Index(){
        $job_type = DB::table('job_type')->orderBy('id','desc')->get();
        return view('Backend.job_type.index',compact('job_type'));
    }
    public function AddJobTypes(){
        return view('Backend.job_type.create');
    }
    public function StoreJobTypes(Request $request)
    {
        // the validdation here should be add
        $data = array();
        $data['job_types'] = $request->job_types;
        DB::table('job_type')->insert($data);
        return Redirect()->route('job.types');

    }
    public function EditJobTypes($id){
       $job_type= DB:: table('job_type')->where('id',$id)->first();
        return view('Backend.job_type.edit',compact('job_type'));

    }
    public function UpdateJobTypes(Request $request,$id){
        $data = array();
        $data['job_types'] = $request->job_types;
        DB::table('job_type')->where('id',$id)->update($data);
        return Redirect()->route('job.types');

    }
    public function DeleteJobTypes($id){
        DB::table('job_type')->where('id',$id)->delete();
        return  Redirect()->route('job.types');

    }
}
