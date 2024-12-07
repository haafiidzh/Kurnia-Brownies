<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary(); 
            $table->uuid('category_id');
            $table->string('name'); 
            $table->string('slug')->unique(); 
            $table->string('image')->nullable(); 
            $table->text('description')->nullable(); 
            $table->boolean('recommended')->default(false); 
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
