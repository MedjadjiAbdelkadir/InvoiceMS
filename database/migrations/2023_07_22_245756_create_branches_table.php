<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();

            $table->foreignId('municipal_id')->references('id')->on('municipals')->onDelete('cascade'); 
            $table->foreignId('unit_id')->references('id')->on('units')->onDelete('cascade'); 
            $table->foreignId('responsible_id')->references('id')->on('branch_managers')->onDelete('cascade'); 

            $table->json('phone')->nullable();
            $table->string('support_email')->unique()->nullable();
            $table->string('info_email')->unique()->nullable();
            
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
        Schema::dropIfExists('branches');
    }
}
