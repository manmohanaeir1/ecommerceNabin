<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseCurriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_curricula', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id')->unsigned();
            $table->string('curriculum_module');
            $table->string('curriculum_slug');
            $table->longText('curriculum_content');
            $table->string('curriculum_file')->nullable();
            $table->enum('status', ["Draft", "Published"]);
            $table->integer('curriculum_order')->nullable();
            $table->integer('admin_id')->unsigned();
            $table->string('seo_title')->nullable();
            $table->string('seo_subtitle')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->string('seo_description')->nullable();
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
        Schema::dropIfExists('course_curricula');
    }
}
