<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
     {
    //     $data = [
    //         'kategori_kode' => 'SNK',
    //         'kategori_nama' => 'Snak/Makanan Ringan',
    //         'created_at' => now()
    //     ];
    //     DB::table('m_kategori') ->insert($data);
    //     return 'Insert data baru berhasil';

    // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' =>'camilan']);
    // return 'update data berhasil.Jumlah Data Yang Diupdate: ' .$row.'baris'; 
    
    // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
    // return 'Delete Data Berhasil.Jumlah Data Yang Dihapus: ' . $row.'baris';

    $data = DB::table('m_kategori')->get();
    return view('kategori', ['data' => $data]);
    }
}
