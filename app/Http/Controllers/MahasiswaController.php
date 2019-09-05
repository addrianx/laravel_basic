<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    function home()
    {
        $user = DB::table('mahasiswa')->get();
        //$user = \App\Mahasiswa::all();
 
        return view('table.mahasiswa', ['user' => $user]);
    }

    function index($id)
    {
        //$user = \App\Mahasiswa::all();
        $siswa = DB::table('mahasiswa')->where('id_mahasiswa', $id)->first();;

        return view('table.show', ['siswa' => $siswa]);
    }

    function tambah()
    {
        return view('table.tambah');
    }

    function insert(Request $request)
    {
        $nama = $request->nama;
        $nim = $request->nim;
        $email = $request->email;
        $jurusan = $request->jurusan;
        
        $request->validate([
            'nim' => 'required|unique:mahasiswa,nim_mahasiswa',
            'email' => 'required|email|unique:mahasiswa,email_mahasiswa'
        ]);


        DB::table('mahasiswa')->insert(
            ['nama_mahasiswa' => $nama,
             'nim_mahasiswa' => $nim,
             'email_mahasiswa' => $email,
             'jurusan_mahasiswa' => $jurusan
            ]
        );

        \Session::flash('message', array('alert-success', 'Data Mahasiswa Berhasil Ditambahkan'));
        return redirect('/mahasiswa');
    }

    //
}
