<?php

namespace App\Http\Controllers\Masters;

use App\Http\Controllers\Controller;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class Penyakits extends Controller
{
    public function index()
    {
        $penyakits = Penyakit::all();
        return view('admin.penyakit.penyakit', compact('penyakits'));
    }
}
