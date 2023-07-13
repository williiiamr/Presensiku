<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class KaryawanController extends Controller
{
    public function index(){
        $karyawan = DB::table('karyawan')->orderBy('nama')->get();
        return view('karyawan.index',compact('karyawan'));
    }
}
