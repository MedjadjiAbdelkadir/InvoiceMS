<?php

namespace Database\Seeders;

use App\Models\Unit;
use App\Models\State;
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
        $states =State::take(5)->get();
        $random_phone = '(213) '. rand(0,9).rand(0,9).'.'.rand(0,9).rand(0,9).'.'.rand(0,9).rand(0,9).'.'.rand(0,9).rand(0,9);

        $faker = Faker::create();

        foreach($states as $item =>$state){
            Unit::create([
                'state_id'      => $state->id, 
                'phone'         => $random_phone, 
                'support_email' =>'support@'.Str::lower(str_replace(' ' , '',$state->name)).'.com' , 
                'info_email'    => 'info@'.Str::lower(str_replace(' ' , '',$state->name)).'.com', 
                'bank_account'  => $faker->creditCardNumber(),
            ]);
        }
    }
}
