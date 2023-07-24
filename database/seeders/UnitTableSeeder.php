<?php

namespace Database\Seeders;

use App\Models\Unit;
use App\Models\State;
use App\Models\UnitManager;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unitManagers =UnitManager::get();
        $states =State::take(5)->get();
        $random_phone = '(213) '. rand(0,9).rand(0,9).'.'.rand(0,9).rand(0,9).'.'.rand(0,9).rand(0,9).'.'.rand(0,9).rand(0,9);

        $faker = Faker::create();

        foreach($unitManagers as $item =>$unitManager){
            Unit::create([
                'responsible_id'=> $unitManager->id, 
                'state_id'      => $unitManager->id, 
                'phone'         => $random_phone, 
                'support_email' =>'support@'.Str::lower(str_replace(' ' , '',$states[$item]['name'])).'.com' , 
                'info_email'    => 'info@'.Str::lower(str_replace(' ' , '',$states[$item]['name'])).'.com', 
                'bank_account'  => $faker->creditCardNumber(),
            ]);
        }
    }
}
