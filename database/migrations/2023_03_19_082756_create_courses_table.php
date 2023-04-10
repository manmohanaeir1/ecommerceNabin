
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_title');
            $table->string('slug');
            $table->string('course_code');
            
            $table->integer('course_category_id')->nullable()->unsigned();
            $table->integer('course_duration');
            $table->longText('course_content');
            $table->string('course_image')->nullable();
            $table->string('curriculum_file')->nullable();
            $table->enum('status', ["Draft", "Published"]);
            $table->integer('admin_id')->unsigned();
            $table->string('seo_title')->nullable();
            $table->string('seo_subtitle')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->string('seo_description')->nullable();
            $table->integer('sort')->nullable();

           // $table->foreign('course_category_id')->references('id')->on('course_categories')->onDelete('cascade');
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
        Schema::dropIfExists('courses');
    }
}
