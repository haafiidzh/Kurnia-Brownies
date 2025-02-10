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
            $table->uuid('category_id')->nullable();
            $table->string('name'); 
            $table->string('slug')->unique(); 
            $table->string('image')->nullable(); 
            $table->text('short_description')->nullable(); 
            $table->text('description')->nullable(); 
            $table->boolean('best_seller')->default(false); 
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
