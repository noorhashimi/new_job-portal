<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class frontJobsController extends Controller
{
    public function Index(){
        // Search using keyword
        
             
        
       //search for location
       
       //search for jobtype
    //    if(!empty($request ->job_types)){
    //     $jobTpyeArray = explode(',',$request->job_types);
       
    //    $Jobs = $jobs->whereIn('job_type_id',jobTypeArray);


        $categories = DB::table('categories')->orderBy('id','desc')->get();
        $job_type = DB::table('job_type')->orderBy('id','ASC')->get();
        $jobs = DB::table('job')
        ->join('job_type', 'job.job_type_id', '=', 'job_type.id')
        ->orderBy('created_at', 'desc')
        ->take(6)
        ->select('job.*', 'job_type.job_types')
        ->get();
        return view('main.frontend.jobs',compact('categories','job_type','jobs'));
    }
    //functon for job detail page
    public function JobDetail($id){
        $currentDate = now()->toDateString();
       
        $job = DB::table('job')
    ->join('job_type', 'job.job_type_id', '=', 'job_type.id')
    ->join('categories', 'job.category_id', '=', 'categories.id')
    ->where('job.id', $id)
    ->first();

        return view('main.frontend.JobsDetail',compact('job','currentDate'));
    }
    // method for applying job
     public function applyJob($id){
        $categories = DB::table('categories')->get();
        $job = DB::table('job')->where('id',$id)->first();
   
    return view('main.frontend.applyJob',compact('categories','job'));
    //first check is that job exist or not
    

    //         ]);
    //     }
    //     // you can not apply on your own job 


    //     //end of this condition
    //     //store job application
    //     // $data = array();
    //     // $data['job_id'] = Auth()->user()->id
    //     // $data['applied_date'] = now()
    //     // DB::table('')

     }
     public function applyJobs(Request $request){



        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'father_name' => 'required',
            'phone_number' => 'required',
            'experience' => 'required',
            'category-name' =>'required',
            'cv_file' => 'required|mimes:pdf,doc,docx'
        ]);
       
        // Rest of the code remains the same
        
    
        $data = array();
        $data ['name']= $request->name;
        $data ['Father name'] = $request->father_name;
        $data ['email'] = $request->email;
        $data ['Phone number'] = $request->phone_number;
        $data ['city']= $request->city;
        $data ['skills']= $request->skills;
        $data ['category_id']= $request->category_id;
        $data ['experience']= $request->input('experience');
        $data['gender'] = $request->input('gender');
        $file = $request->cv_file;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request->cv_file->move('assets',$filename);
        $data ['cv_file']= $filename;
        DB::table('submit_info')->insert($data);
        session()->flash('success', 'Updated successfully');
        return Redirect()->route('apply.jobs');
        

     }
    
   
}

