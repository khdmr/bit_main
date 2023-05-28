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
        Schema::create('courses', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('id_category');
            $table->string('title')->unique();
            $table->text('summary');
            $table->integer('price');
            $table->timestamps();
            $table->foreign('id_category')->references('id')->on('course_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
