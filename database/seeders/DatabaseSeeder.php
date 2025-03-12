<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\m_level;
use App\Models\m_kategori;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            //nama seeder
            // LevelSeeder::class,
            PenjualanDetailSeeder::class,
            // m_barang::class,
            // m_kategori::class,
            // t_stok::class,
            // t_penjualan_detail::class,
            // t_penjualan::class,
        ]);
    
    
    }
}
