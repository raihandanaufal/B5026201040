<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    public function index()
    {
    	$keranjang = DB::table('keranjang')->paginate(3);
    	return view('keranjang.index',['keranjang' => $keranjang]);
    }
    public function tambah(){
        return view('keranjang.tambah');
        }
        public function store(Request $request)
        {
        DB::table('keranjang')->insert([
            'kodebarang' => $request->kodebarang,
            'Jumlah' => $request->jumlah,
            'Harga' => $request->harga,
        ]);
        return redirect('/keranjang');
        }
        public function hapus($id)
    {
	DB::table('keranjang')->where('ID',$id)->delete();
	return redirect('/keranjang');
    }
}
