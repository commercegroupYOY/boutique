<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {

            $table->id('id');
            $table->string('name', 50);
            $table->float('price');
            $table->float('weight');
            $table->string('image_url');
            $table->integer('stock');
            $table->boolean('available');
            $table->text('description');
            $table->foreignId('category_id')->constrained();
            // $table->foreignId('category_id')->constrained();
            $table->timestamps();
        });
    }

 
    
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
