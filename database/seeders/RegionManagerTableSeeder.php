<?php

namespace Database\Seeders;

use App\Models\RegionManager;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RegionManagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RegionManager::create([
            'name'      =>'Region Manager 1',
            'email'     =>'region.manager1@example.com',
            'password'  =>Hash::make('123456789'),
            'phone'     =>'0102030405',
            'region_id' =>1,
        ]);
    }
}
