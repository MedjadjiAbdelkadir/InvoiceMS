<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

            $table->string('invoice_code', 50);
            $table->foreignId('client_id')->references('id')->on('clients')->onDelete('cascade'); 
            $table->foreignId('region_manager_id')->references('id')->on('region_managers')->onDelete('cascade'); 


            // $table->date('issue_date');

            $table->date('invoice_date');

            $table->date('last_review');
            $table->date('preview');
            $table->date('next_preview');
            $table->date('next_invoice');

            $table->date('last_payment_date');

            $table->decimal('old_consumption', 8,2);
            $table->decimal('new_consumption', 8,2);
            // $table->decimal('consumption', 8,2);

            $table->decimal('amount',8,2);
            $table->decimal('total',8,2);

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
        Schema::dropIfExists('invoices');
    }
}
