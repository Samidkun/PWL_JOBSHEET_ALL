<!-- <?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\m_level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $data = [
        ['level_id' => 4, 'level_kode'=> 'dsd', 'level_nama'=> 'Administrator'],
       ['level_id' => 5, 'level_kode'=> 'ds', 'level_nama'=> 'Manager'],
       ['level_id' => 6, 'level_kode'=> 'ds', 'level_nama'=> 'Staff/Kasir'],
       ];
       
       //insert

       m_level::insert($data); 
    }
}; 
