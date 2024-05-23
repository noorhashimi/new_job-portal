<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PostjobController extends Controller
{
    public function createJob(){
        return view('main.frontend.job.create');

    }
}
