<?php

use App\Models\State;
use App\Models\Branch;
use App\Models\Municipal;
use App\Models\UnitManager;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

use App\Models\BranchManager;
use App\Models\Unit;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
|--------------------------------------------------------------------------
*/

Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){ 
    Route::get('/{page}', function ($page) {
    return view($page);


    });

    Route::get('/', function () {
        
    });

});



/*
|--------------------------------------------------------------------------
*/