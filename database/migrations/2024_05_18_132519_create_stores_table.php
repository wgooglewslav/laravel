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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->string('image');
            $table->integer('likes');
            $table->timestamps();

            $table->unsignedBigInteger('category_id')->nullable();
            $table->index('category_id', 'store_category_idx');
            $table->foreign('category_id', 'store_category_fk')->on('categories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
