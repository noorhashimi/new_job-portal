<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(Request $request)
{
    $search = $request->input('search', '');
    $search2 = $request->input('search2', '');

    $query = DB::table('job')
        ->join('job_type', 'job.job_type_id', '=', 'job_type.id')
        ->orderBy('created_at', 'desc')
        ->take(6)
        ->select('job.*', 'job_type.job_types');

    if ($search !== '') {
        $query->where('job_title', '=', $search);
    }

    if ($search2 !== '') {
        $query->where('job_location', 'LIKE', "%$search2");
    }

    $latest_jobs = $query->get();

    $categories = DB::table('categories')
        ->orderBy('category-name', 'ASC')
        ->take(6)
        ->get();

    return view('main.home', compact('categories', 'latest_jobs', 'search', 'search2'));
}
}