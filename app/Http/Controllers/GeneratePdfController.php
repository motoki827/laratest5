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

        //セッションに保存されている変数を受け取る
        $values = $request->session()->get('creates');
        $values=$values[0];
        //dd($values);
        //ｐｄｆを出力
        $pdf = PDF::loadView('generate_pdf',compact('values'));
        return $pdf->download('generate_pdf');
         $request->session()->flush();
    }
}
