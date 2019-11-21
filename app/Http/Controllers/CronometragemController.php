<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CronometragemController extends Controller
{
    public function index()
    {
        return view('cronometro.index');
    }

}
