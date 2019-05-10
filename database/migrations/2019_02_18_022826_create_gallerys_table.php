<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGallerysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('gallerys')) {
        Schema::create('gallerys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gtype');
            $table->string('name',30)->unique(); //field data should be unique
            $table->string('description',200)->nullable(); //field can be blank with nullable
            $table->string('image');
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
        Schema::dropIfExists('gallerys');
    }
}
