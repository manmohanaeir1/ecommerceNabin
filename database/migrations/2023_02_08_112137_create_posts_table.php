<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('post_title');
            $table->string('slug');
            $table->integer('category_id')->nullable()->unsigned();
            $table->longText('post_content');
            $table->string('image')->nullable();
            $table->integer('start_date')->nullable();
            $table->integer('valid_date')->nullable();

            $table->enum('status', ["Draft", "Published"]);
            $table->integer('view_count')->default(0);
            $table->string('seo_title')->nullable();
            $table->string('seo_subtitle')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->string('seo_description')->nullable();
            $table->integer('admin_id')->unsigned();
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
        Schema::dropIfExists('posts');
    }
}
