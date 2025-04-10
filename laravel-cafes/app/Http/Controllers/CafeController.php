<?php

namespace App\Http\Controllers;

use App\Models\Cafe;

class CafeController extends Controller
{
    public function index()
    {
        $cafes = Cafe::all();
        return view('cafes.index', compact('cafes'));
    }
}

