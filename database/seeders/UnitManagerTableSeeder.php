<?php

namespace Database\Seeders;

use App\Models\Unit;
use App\Models\State;
use App\Models\UnitManager;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        $units = Unit::get();

        foreach($units as $item => $unit){
            UnitManager::create([
                'name'   =>$states[$item]->name .' Manager',
                'email'   =>Str::lower('manager@'.str_replace(' ' , '',$states[$item]->name).'.com'),
                'password'   =>Hash::make('123456789'),
                'gender'   =>'1',
                'unit_id'  =>$unit->id,
            ]);
        }

    }
}
