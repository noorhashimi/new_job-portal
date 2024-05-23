<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Export_info;
use App\Exports\InfoExport;
use Maatwebsite\Excel\Facades\Excel;


class Export_infoController extends Controller
{
    public function Export(Request $request){


        return Excel::download(new InfoExport($request), 'Info.xlsx');
        
    }
}
