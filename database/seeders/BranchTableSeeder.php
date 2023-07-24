<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Municipal;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $municipals =Municipal::with('states')->take(177)->get();
        $random_phone = rand(0,9).rand(0,9).'.'.rand(0,9).rand(0,9).'.'.rand(0,9).rand(0,9).'.'.rand(0,9).rand(0,9);

        foreach($municipals  as $item => $municipal){
            Branch::create([
                'municipal_id'   => $municipal->id,
                'unit_id'        => $municipal->state_id,
                'phone'          => "(213) ".$random_phone,
                'support_email'  =>'support@'.Str::lower(str_replace(' ' , '', $municipals[$item]->states->name).'.'.str_replace(' ' , '',$municipals[$item]['name'])).'.com' , 
                'info_email'     => 'info@'.Str::lower(str_replace(' ' , '', $municipals[$item]->states->name).'.'.str_replace(' ' , '',$municipals[$item]['name'])).'.com' , 
            ]);
        }
    }
}
