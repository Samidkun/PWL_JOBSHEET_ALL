<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\m_barang;
class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => '234667', 'barang_nama' => 'Laptop', 'harga_beli' => 1000000, 'harga_jual' => 100000],
            ['barang_id' => 2, 'kategori_id' => 2, 'barang_kode' => '834092', 'barang_nama' => 'Smartphone', 'harga_beli' => 3000000, 'harga_jual' => 8000000],
            ['barang_id' => 3, 'kategori_id' => 3, 'barang_kode' => '394434', 'barang_nama' => 'Shirt', 'harga_beli' => 5000, 'harga_jual' => 5000000],
            ['barang_id' => 4, 'kategori_id' => 4, 'barang_kode' => '748303', 'barang_nama' => 'Bread', 'harga_beli' => 700000, 'harga_jual' => 5000],
            ['barang_id' => 5, 'kategori_id' => 5, 'barang_kode' => '098134', 'barang_nama' => 'Cereal', 'harga_beli' => 90000, 'harga_jual' => 5000],
            ['barang_id' => 6, 'kategori_id' => 1, 'barang_kode' => '097624', 'barang_nama' => 'Grinder', 'harga_beli' => 90000, 'harga_jual' => 5000000],
            ['barang_id' => 7, 'kategori_id' => 2, 'barang_kode' => '567890', 'barang_nama' => 'Doll', 'harga_beli' => 1500000, 'harga_jual' => 5000000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => '098765', 'barang_nama' => 'Iron', 'harga_beli' => 1600000, 'harga_jual' => 5000000],
            ['barang_id' => 9, 'kategori_id' => 4, 'barang_kode' => '534423', 'barang_nama' => 'Blender', 'harga_beli' => 1650000, 'harga_jual' => 5000000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => '198633', 'barang_nama' => 'Washing Machine', 'harga_beli' => 890000, 'harga_jual' => 5000000],
        ];
        
    m_barang::insert($data);           }
}
