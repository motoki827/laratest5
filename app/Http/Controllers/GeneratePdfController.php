<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;


class GeneratePdfController extends Controller
{
    //
    public function generate_pdf()
    {   
        $pdf = PDF::loadView('create_today_menu');
        return $pdf->download('create_today_menu');
    }
}
