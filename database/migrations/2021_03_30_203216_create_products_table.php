<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            /* $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('no action')->onDelete('no action'); */
            $table->string('name');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->decimal('price', 7, 2);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
