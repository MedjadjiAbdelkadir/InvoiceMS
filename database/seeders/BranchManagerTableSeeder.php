<?php

namespace Database\Seeders;

use App\Models\Municipal;
use Illuminate\Support\Str;
use App\Models\BranchManager;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BranchManagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipals =Municipal::with('states')->take(177)->get();

        // foreach($municipals as $municipal){
        //     echo $municipal->name.' '.$municipal->states->name.' Manger';
        //     echo "<br>";
        //     echo Str::lower('manager@'.str_replace(' ' , '',$municipal->states->name).'-'.str_replace(' ' , '',$municipal->name).'.com');
        //     echo "<br>";
    
        // }
        
        foreach($municipals as $municipal){
            BranchManager::create([
                'name'      => $municipal->name.' '.$municipal->states->name.' Manger' ,
                'email'     => Str::lower('manager@'.str_replace(' ' , '',$municipal->states->name).'.'.str_replace(' ' , '',$municipal->name).'.com'),
                'password'  => Hash::make('123456789'),
                'gender'    => '1',
            ]);
        }
    }
}
