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
        Schema::create('products', function (Blueprint $table) {


            // $table->charset = 'utf8mb4';
            // $table->collation = 'utf8mb4_unicode_ci';

            $table->id('id');
            $table->string('name',50);
            $table->float('price');
            $table->float('weight');
            $table->string('image_url');
            $table->integer('stock');
            $table->boolean('available');
            $table->text('description');
            $table->foreignId('category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }


//     Schema::rename($from, $to){
// ;
//     }
};
