<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SandalController extends Controller
{
    public function index()
    {
     // mengambil data dari table pegawai
    //  $pegawai = DB::table('pegawai')->get();
    $sandal = DB::table('sandal')->paginate(3) ;

     // mengirim data sandal ke view index
     return view('sandal.index',['sandal' => $sandal]);

    }
    // method untuk menampilkan view form tambah sandal
    public function tambah()
    {

 // memanggil view tambah
 return view('sandal.tambah');

    }
    // method untuk insert data ke table sandal
    public function store(Request $request)
    {
 // insert data ke table sandal
 DB::table('sandal')->insert([
  'kodesandal' => $request->kodesandal,
  'merksandal' => $request->merksandal,
  'stocksandal' => $request->stock,
  'tersedia' => $request->tersedia
 ]);
 // alihkan halaman ke halaman sandal
 return redirect('/sandal');

    }
    // method untuk edit data sandal
    public function edit($id)
    {
 // mengambil data sandal berdasarkan id yang dipilih
 $sandal = DB::table('sandal')->where('kodesandal',$id)->get();
 // passing data sandal yang didapat ke view edit.blade.php
 return view('sandal.edit',['sandal' => $sandal]);

    }
    // update data sandal
    public function update(Request $request)
    {
 // update data sandal
 DB::table('sandal')->where('kodesandal',$request->id)->update([
    'kodesandal' => $request->kodesandal,
    'merksandal' => $request->merksandal,
    'stocksandal' => $request->stock,
    'tersedia' => $request->tersedia
 ]);
 // alihkan halaman ke halaman sandal
 return redirect('/sandal');
    }
    // method untuk hapus data sandal
    public function hapus($id)
    {
 // menghapus data sandal berdasarkan id yang dipilih
 DB::table('sandal')->where('kodesandal',$id)->delete();

 // alihkan halaman ke halaman sandal
 return redirect('/sandal');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table sandal sesuai pencarian data
		$sandal = DB::table('sandal')
		->where('merksandal','like',"%".$cari."%" )
		->paginate();

    		// mengirim data sandal ke view index
		return view('sandal.index',['sandal' => $sandal]);

	}
    public function detail($id){
        $sandal = DB::table('sandal')->where('kodesandal',$id)->first();
        return view('sandal.detail', compact('sandal'));
        }
}
