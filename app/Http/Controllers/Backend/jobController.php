<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class jobController extends Controller
{
public function Create(){
    $categories = DB::table('categories')->orderBy('id','desc')->get();
    $job_type = DB::table('job_type')->get();
     return view('Backend.create_job.create',compact('categories','job_type'));
}
public function StoreJobs(Request $request){
    $data = array();
    $data['job_title']= $request->job_title;
    $data['category_id']= $request->category_id;
    $data['job_type_id']= $request->job_type_id;
    $data['announced_date']= $request->announced_date;
    $data['job_location']= $request->job_location;
    $data['status']= $request->status;
    $data['nationality']= $request->nationality;
    $data['salary']= $request->salary;
    $data['vacancy_number']= $request->vacancy_number;
    $data['no_of_Jobs']= $request->no_of_Jobs;
    $data['city']= $request->job_location;
    $data['organization']= $request->organization;
    $data['company_info']= $request->input('company_info');
    $data['company_name']= $request->company_name;
    $data['company_location']= $request->company_location;
    $data['company_website']= $request->company_website;
    $data['responsibility']= $request->responsibility;
    $data['education']= $request->education;
    $data['close_date']= $request->close_date;
    $data['contact_duration']= $request->contact_duration;
    $data['gender']= $request->gender;
    $data['experience']= $request->experience;
    $data['job_description']= $request->job_description;
    $data['job_requirement']= $request->job_requirement;
  
    $data['submission_guide_line']= $request->submission_guide_line;
    $data['submission_email']= $request->submission_email;
    DB::table('job')->insert($data);
    return  Redirect()->route('all.jobs');
   
}
public function Index(){

   $job = DB::table('job')->orderBy('id','desc')->get();
   return view('Backend.create_job.index',compact('job')); 
}
public function EditJobs($id){
    $job = DB::table('job')->where('id',$id)->first();
    $category = DB::table('categories')->get();
    $job_type = DB::table('job_type')->get();
    return view('Backend.create_job.edit',compact('job','category','job_type'));
}
public function UpdateJob(Request $request, $id){
    $data = array();
    $data['job_title']= $request->job_title;
    $data['category_id']= $request->category_id;
    $data['job_type_id']= $request->job_type_id;
    $data['announced_date']= $request->announced_date;
    $data['job_location']= $request->job_location;
    $data['nationality']= $request->nationality;
    $data['salary']= $request->salary;
    $data['vacancy_number']= $request->vacancy_number;
    $data['no_of_Jobs']= $request->no_of_Jobs;
    $data['city']= $request->job_location;
    $data['organization']= $request->organization;
    $data['company_info']= $request->company_info;
    $data['company_name']= $request->company_name;
    $data['company_location']= $request->company_location;
    $data['company_website']= $request->company_website;
    $data['responsibility']= $request->responsibility;
    $data['education']= $request->education;
    $data['close_date']= $request->close_date;
    $data['contact_duration']= $request->contact_duration;
    $data['gender']= $request->gender;
    $data['experience']= $request->experience;
    $data['job_description']= $request->job_description;
    $data['job_requirement']= $request->job_requirement;
  
    $data['submission_guide_line']= $request->submission_guide_line;
    $data['submission_email']= $request->submission_email;
    DB::table('job')->where('id',$id)->update($data);
    return Redirect()->rote('all.jobs');


}
public function DeleteJobs($id){
    $job = DB::table('job')->where('id',$id)->delete();
    return Redirect()->route('all.jobs');
}
}
