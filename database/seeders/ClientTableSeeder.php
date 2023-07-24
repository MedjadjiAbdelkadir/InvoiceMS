<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'region_id' => '1',
            'code'      => '01010101',
            'name'      => 'Meziane Khalile',
            'email'     => 'mezianekhalile@hmail.com',
            'phone'     => '0550505050',
            'password'  => Hash::make('123456789'),
            'address'   => 'Hay Cherif Boukadir',
        ]);
    }
}
