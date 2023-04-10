<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('photo_id');
            $table->string('image');
            // for foreign key
                     
            $table->foreign('photo_id')->references('id')
            ->on('photos')->onDelete('cascade');


           

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
        Schema::dropIfExists('photo_lists');
    }
}
