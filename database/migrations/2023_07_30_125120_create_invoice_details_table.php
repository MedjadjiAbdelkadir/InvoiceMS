<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->id();

            $table->foreignId('invoice_id')->references('id')->on('invoices')->onDelete('cascade'); 
            $table->string('invoice_code', 50);
            $table->foreignId('region_manager_id')->references('id')->on('region_managers')->onDelete('cascade'); 

            $table->enum('payment_status', ['pending', 'paid', 'overdue'])->default('pending');
            $table->date('payment_date')->nullable();
            $table->text('note')->nullable();

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
        Schema::dropIfExists('invoice_details');
    }
}
