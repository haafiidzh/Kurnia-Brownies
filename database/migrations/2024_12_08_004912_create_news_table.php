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
        Schema::create('news', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('slug')->unique(); 
            $table->string('keywords'); 
            $table->string('subject'); 
            $table->text('description');
            $table->string('image')->nullable(); 
            $table->boolean('is_active')->default(true);
            $table->unsignedBigInteger('views')->default(0);
            $table->uuid('created_by')->nullable(); 
            $table->dateTime('published_at')->nullable();
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
