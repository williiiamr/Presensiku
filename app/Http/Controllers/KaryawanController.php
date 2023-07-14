<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class KaryawanController extends Controller
{
    public function index(){
        $karyawan = DB::table('karyawan')->orderBy('nama')->paginate(3);
        return view('karyawan.index',compact('karyawan'));
    }

    public function store(Request $request){
        $nik = $request->nik;
        $nama = $request->nama;
        $jabatan = $request->jabatan;
        $no_hp = $request->no_telp;
        $password = Hash::make('123');
        try{
            $data = [
                'nik' => $nik,
                'nama' => $nama,
                'jabatan' => $jabatan,
                'no_hp' => $no_hp,
                'password' => $password
            ];
            $simpan = DB::table('karyawan')->insert($data);
            if($simpan){
                return Redirect::back()->with(['success' => 'Data Berhasil Disimpan']);
            }
        } catch (\Exception $e){
            dd($e);
        }
        
    }
}
