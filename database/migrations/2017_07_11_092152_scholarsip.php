<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Scholarsip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('organizer');
            $table->string('place');
            $table->longText('description');
            $table->dateTime('deadline');
            $table->string('featured_image')->nullable();
            $table->unsignedInteger('liked')->nullable()->default(0);
            $table->unsignedInteger('shered')->nullable()->default(0);
            $table->timestamps();
        });

        Schema::create('scholarships_comment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('scholarships_id');
            $table->text('comment');
            $table->timestamps();
        });

        Schema::create('scholarships_like', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('scholarships_id');
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
        Schema::dropIfExists('scholarships');
        Schema::dropIfExists('scholarships_comment');
    }
}
