<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Catogery;
use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{



    /**
     * Seed the application's database.
     *
     * @return void
     */


    public function run()
    {
        //  User::truncate();
        //  Catogery::truncate();
        //  Property::truncate();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UsersTableSeeder::class,
            PropetieTypeTable::class,
            CatogerysTableSeeder::class,
            PropertiesTableSeeder::class,
            SettingsTableSeeder::class,
            ReportTableSeeder::class,
            EnquyrisTableSeeder::class,
            BlogsTableSeeder::class,
        ]);
    }
}
