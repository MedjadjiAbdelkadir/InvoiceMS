<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->foreignId('region_id')->references('id')->on('regions')->onDelete('cascade'); 
            
            $table->string('name');
            $table->string('code')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->enum('gender',['1','2'])->default(1);
            $table->string('phone')->nullable();
            $table->string('address');
            $table->enum('status',['open','closed'])->default('open');
           
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
