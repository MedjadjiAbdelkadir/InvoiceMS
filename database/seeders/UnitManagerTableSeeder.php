<?php

namespace Database\Seeders;

use App\Models\State;
use App\Models\UnitManager;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UnitManagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $states =State::take(5)->get();

        foreach($states as $state){
            UnitManager::create([
                'name'   =>$state->name .' Manager',
                'email'   =>Str::lower('manager@'.str_replace(' ' , '',$state->name).'.com'),
                'password'   =>Hash::make('123456789'),
                'gender'   =>'1',
            ]);
        }

    }
}
