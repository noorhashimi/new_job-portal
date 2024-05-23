<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;
use DB;


class cadidateInfoController extends Controller
{
    public function ShowInfo(){
        
        $candidate_info = DB::table('submit_info')->orderBy('id','desc')->get();
        return view('Backend.candidate.candidate_show_info',compact('candidate_info'));
    }
    public function downloadInfo(Request $requwest ,$filename){
        return response()->download(public_path('assets/'.$filename));

     }
     public function ViewInfo($id){
      $view_info = DB::table('submit_info')->where('id',$id)->first();
         return view('Backend.candidate.view_cv',compact('view_info'));

     }
}
