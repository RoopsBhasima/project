<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('posts')) {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',30)->unique(); //field data should be unique
            $table->string('description',200)->nullable(); //field can be blank with nullable
            $table->string('heading',80);
            $table->string('shortstory',100);
            $table->string('fullstory',250);
            $table->integer('category_id');
            $table->integer('user_id');
            $table->string('fimage');
            $table->boolean('status');
            $table->timestamps();
        });
    }
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
