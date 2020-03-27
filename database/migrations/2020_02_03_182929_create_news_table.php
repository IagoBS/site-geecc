<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('user_id')->unsigned()->onDelete('cascade');;
            $table->foreign('user_id')->references('id')->on('users');

            $table->bigInteger('category_id')->unsigned()->onDelete('cascade');;
            $table->foreign('category_id')->references('id')->on('categories');


            $table->bigInteger('institute_id')->unsigned()->nullable()->onDelete('cascade');;
            $table->foreign('institute_id')->references('id')->on('institutes');

            $table->string('title');
            $table->longText('content');
            $table->string('slug');
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
        Schema::dropIfExists('news');
    }
}
