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
            $table->string('name'); 
            $table->string('slug')->unique(); 
            $table->string('image')->nullable(); 
            $table->text('description')->nullable(); 
            $table->boolean('recommended')->default(false); 
            $table->foreignId('category_id')->nullable()->constrained('product_categories')->onDelete('set null');
            $table->softDeletes();
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
