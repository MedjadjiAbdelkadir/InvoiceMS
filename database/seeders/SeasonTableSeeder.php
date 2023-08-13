<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Seeder;

class SeasonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seasons  = ['First','Second','Third','Fourth'];

        foreach($seasons as $item => $season){
            Season::create([
                'name' => $season,
            ]);
        }
    
    }
}
