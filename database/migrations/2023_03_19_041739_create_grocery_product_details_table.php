<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroceryProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grocery_product_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grocery_id');
            $table->string('product_name');
            $table->string('product_details');
            $table->string('image');
            $table->timestamps();
            $table->foreign('grocery_id')->references('id')->on('groceries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grocery_product_details');
    }
}
