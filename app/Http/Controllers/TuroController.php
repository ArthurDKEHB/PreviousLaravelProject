<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TuroController extends Controller
{

    public function show($turotest)
    {
        // return 'mo!';
        return '<h1>Hello</h1>';


        // $turodb = \DB::table('test_table')->where('Number', $turotest)->first();

        // dd($turodb);


    }
}
