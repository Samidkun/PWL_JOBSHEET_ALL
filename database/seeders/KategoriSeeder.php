<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//mengambil data dari model
use App\Models\m_kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[['kategori_id' => 1,'kategori_kode'=>'001','kategori_nama'=>'Electronic'],
            ['kategori_id'=> 2,'kategori_kode'=>'002','kategori_nama'=>'Shirt'],
            ['kategori_id'=> 3,'kategori_kode'=>'003','kategori_nama'=>'Food'],
            ['kategori_id'=> 4,'kategori_kode'=>'004','kategori_nama'=>'Toy'],
            ['kategori_id'=> 5,'kategori_kode'=>'005','kategori_nama'=>'Home Appliances'],
    ];
    //insetr data
    m_kategori::insert($data); 
    }
    
}
