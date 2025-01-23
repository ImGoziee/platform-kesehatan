<?php

namespace App\Http\Controllers\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Artikel extends Controller
{
    public function index()
    {
        return view('admin.artikel.artikel');
    }
}
