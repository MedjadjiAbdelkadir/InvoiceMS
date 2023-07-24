<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();

            $table->foreignId('state_id')->references('id')->on('states')->onDelete('cascade'); 
            $table->foreignId('responsible_id')->references('id')->on('unit_managers')->onDelete('cascade'); 
            
            $table->json('phone')->nullable();
            $table->string('support_email')->unique()->nullable();
            $table->string('info_email')->unique()->nullable();
            $table->string('bank_account')->unique()->nullable();

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
        Schema::dropIfExists('units');
    }
}
