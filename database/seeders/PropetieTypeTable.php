<?php

namespace Database\Seeders;

use App\Models\PropetieType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropetieTypeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PropetieType::create([
            'id' => '1',
            'name' => 'سكني',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        PropetieType::create([
            'id' => '2',
            'name' => 'تجاري',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
    }
}
