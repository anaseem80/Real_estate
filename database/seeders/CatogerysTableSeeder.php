<?php

namespace Database\Seeders;

use App\Models\Catogery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatogerysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

             Catogery::create([
                'name' => 'منزل',
                'Created_by' => 'محمود محمد',
                'image_path' => 'catogery/1.png',
                'proType_id' => '1',
                'count' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ]);

            Catogery::create([
                'name' => 'شاليه',
                'Created_by' => 'محمود محمد',
                'image_path' => 'catogery/2.png',
                'proType_id' => '1',
                'count' => '0',

                'created_at' => now(),
                'updated_at' => now()
            ]);


            Catogery::create([
                'name' => 'فندق',
                'Created_by' => 'محمود محمد',
                'image_path' => 'catogery/3.png',
                'proType_id' => '1',
                'count' => '0',

                'created_at' => now(),
                'updated_at' => now()
            ]);

            Catogery::create([
                'name' => 'فيلا',
                'Created_by' => 'محمود محمد',
                'image_path' => 'catogery/4.png',
                'proType_id' => '1',
                'count' => '0',

                'created_at' => now(),
                'updated_at' => now()
            ]);
            Catogery::create([
                'name' => 'محل',
                'Created_by' => 'محمود محمد',
                'image_path' => 'catogery/4.png',
                'proType_id' => '2',
                'count' => '0',

                'created_at' => now(),
                'updated_at' => now()
            ]);
            Catogery::create([
                'name' => 'مكتب',
                'Created_by' => 'محمود محمد',
                'image_path' => 'catogery/4.png',
                'proType_id' => '2',
                'count' => '0',

                'created_at' => now(),
                'updated_at' => now()
            ]);
    }
}
