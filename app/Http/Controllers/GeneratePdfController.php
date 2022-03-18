<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;


class GeneratePdfController extends Controller
{
    //
    public function generate_pdf(Request $request)
    {   
        // $creates = $request->input();
        // dd($creates);
        $values = $request->session()->get('creates');
        dd($values);
        $pdf = PDF::loadView('generate_pdf',compact('values'));
        return $pdf->download('generate_pdf');
    }
}
