<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment_transactions', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('id_payment');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_course');
            $table->string('complete_name'); 
            $table->string('no_telp'); 
            $table->string('email'); 
            $table->string('payment_confirmation');
            $table->unsignedBigInteger('id_payment_status')->default(1);
            $table->integer('total_payment');
            $table->foreign('id_payment')->references('id')->on('payments');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_course')->references('id')->on('courses');
            $table->foreign('id_payment_status')->references('id')->on('payment_statuses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_transactions');
    }
};
