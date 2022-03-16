<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class GeneratePdfController extends Controller
{
    //
    public function generate_pdf()
    {
        $pdf = PDF::loadView('generate_pdf');
        return $pdf->download('generate_pdf.pdf');
    }
}
