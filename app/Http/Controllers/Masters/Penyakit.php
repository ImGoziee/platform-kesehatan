<?php

namespace App\Http\Controllers\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Penyakit extends Controller
{
    public function index()
    {
        return view('admin.penyakit.penyakit');
    }
}
