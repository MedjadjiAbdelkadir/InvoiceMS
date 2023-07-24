<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UnitTableSeeder;
use Database\Seeders\StateTableSeeder;
use Database\Seeders\BranchTableSeeder;
use Database\Seeders\ClientTableSeeder;
use Database\Seeders\RegionTableSeeder;
use Database\Seeders\MunicipalTableSeeder;
use Database\Seeders\UnitManagerTableSeeder;
use Database\Seeders\BranchManagerTableSeeder;
use Database\Seeders\RegionManagerTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            StateTableSeeder::class,
            MunicipalTableSeeder::class,
           
            UnitTableSeeder::class,
            BranchTableSeeder::class,

            UnitManagerTableSeeder::class,
            BranchManagerTableSeeder::class,

            RegionTableSeeder::class,
            RegionManagerTableSeeder::class,

            ClientTableSeeder::class,
        ]);
    }
}
