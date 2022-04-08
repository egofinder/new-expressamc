<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appraisals', function (Blueprint $table) {
            $table->id();
            $table->string('loan_number', 20);
            $table->string('invoice_id', 20)->unique()->nullable();
            $table->date('order_date');
            $table->unsignedBigInteger('order_by');
            $table->string('company', 50)->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('fax', 30)->nullable();
            $table->integer('fee');
            $table->string('payment', 20)->nullable();
            $table->string('paid_by', 20)->nullable();
            $table->string('payment_id', 100)->nullable();
            $table->timestamps();
            $table->foreign('loan_number')
                ->references('TransDetailsLoan')
                ->on('loans');
            $table->foreign('order_by')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appraisals');
    }
};
