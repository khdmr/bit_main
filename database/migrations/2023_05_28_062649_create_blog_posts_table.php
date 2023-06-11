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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('id_author');
            $table->string('title');
            $table->text('summary');
            $table->text('content');
            $table->string('image')->nullable();
            $table->timestamps();
            $table->foreign('id_author')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
