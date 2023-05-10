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
            $table->string('title');
            $table->string("brand")->nullable();
            $table->string('slug');
            $table->string('thumbnail');
            $table->unsignedBigInteger('category_id');
            $table->string('price');
            $table->string('new_price');
            $table->string('short_description');
            $table->longText('description');
            $table->string('features')->nullable();
            $table->boolean('availability')->default(1);
            $table->enum('status', ["Draft", "Published"]);
            //making `category_id` as foreign key
            $table->foreign('category_id')->references('id')->on('product_categories')->onDelete('cascade');
         
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
