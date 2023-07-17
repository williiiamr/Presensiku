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
        $karyawan = DB::table('karyawan')->orderBy('nama')->paginate(5);
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

    public function edit(Request $request){
        $nik = $request->nik;
        $karyawan = DB::table('karyawan')->where('nik', $nik)->first();
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update($nik, Request $request){
        $nama = $request->nama;
        $jabatan = $request->jabatan;
        $no_hp = $request->no_telp;
        $password = Hash::make('123');
        try{
            $data = [
                'nama' => $nama,
                'jabatan' => $jabatan,
                'no_hp' => $no_hp,
                'password' => $password
            ];
            $update = DB::table('karyawan')->where('nik', $nik)->update($data);
            if($update){
                return Redirect::back()->with(['success' => 'Data Berhasil Disimpan']);
            }
        } catch (\Exception $e){
            dd($e);
        }
    }

    public function delete($nik){
        $delete = DB::table('karyawan')->where('nik', $nik)->delete();
        if($delete){
            return Redirect::back();
        }else{
            dd($delete);
        }
    }
}
