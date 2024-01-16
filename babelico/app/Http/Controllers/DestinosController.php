<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestinosController extends Controller
{
    public function index()
    {
        $destinos = DB::table('destinos')->get();

        return view('destinos.index', compact('destinos'));
    }
}