<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\t_penjualan;
class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => '1', 'pembeli' => 'Samid', 'penjualan_kode' => '473829', 'penjualan_tanggal' => '2024-09-01'],
            ['penjualan_id' => 2, 'user_id' => '2', 'pembeli' => 'Najril', 'penjualan_kode' => '87653', 'penjualan_tanggal' => '2024-01-12'],
            ['penjualan_id' => 3, 'user_id' => '3', 'pembeli' => 'Apep', 'penjualan_kode' => '97273', 'penjualan_tanggal' => '2024-02-09'],
            ['penjualan_id' => 4, 'user_id' => '1', 'pembeli' => 'Nopal Sigma', 'penjualan_kode' => '092809', 'penjualan_tanggal' => '2024-04-10'],
            ['penjualan_id' => 5, 'user_id' => '2', 'pembeli' => 'Bapak', 'penjualan_kode' => '39109', 'penjualan_tanggal' => '2024-08-09'],
            ['penjualan_id' => 6, 'user_id' => '3', 'pembeli' => 'Satrio', 'penjualan_kode' => '40925', 'penjualan_tanggal' => '2024-03-15'],
            ['penjualan_id' => 7, 'user_id' => '1', 'pembeli' => 'El Botuna', 'penjualan_kode' => '18723', 'penjualan_tanggal' => '2024-01-15'],
            ['penjualan_id' => 8, 'user_id' => '2', 'pembeli' => 'Sucap', 'penjualan_kode' => '34324', 'penjualan_tanggal' => '2024-04-15'],
            ['penjualan_id' => 9, 'user_id' => '3', 'pembeli' => 'Lil', 'penjualan_kode' => '87653', 'penjualan_tanggal' => '2024-01-12'],
            ['penjualan_id' => 10, 'user_id' => '1', 'pembeli' => 'Ril', 'penjualan_kode' => '87653', 'penjualan_tanggal' => '2024-01-12']
        ];
        
        t_penjualan::insert($data);  
    }
}
