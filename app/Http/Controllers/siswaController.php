<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;

class siswaController extends Controller
{
    //
    public function percobaan1()
    {
    	$a = siswa::all();
    	return view('percobaan', compact('a'));

    }
}
