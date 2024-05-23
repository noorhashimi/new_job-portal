<?php

namespace App\Exports;
use Illuminate\Support\Facades\DB;

// use App\Models\Export_info;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class InfoExport implements FromView
{
    public function view(): View
    {
        $export_info =DB::table('submit_info')->orderBy('id','desc')->get();
        return view('main.frontend.export_info', [
            'export_info' => $export_info
        ]);
    }
}




