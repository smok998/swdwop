<?php

namespace App\Http\Controllers;

use App\Dwop;
use Illuminate\Http\Request;

use App\Http\Requests;

class DwopController extends Controller
{

    public function wsp()
    {
        $dwop = Dwop::all();
        return view('dwop')->with('dwop',$dwop);

    }


    public function create()
    {
        return view('dodajdwop');

    }



}
