<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description',500);
            $table->string('image');
            $table->string('breadth')->nullable();
            $table->string('thickness')->nullable();
            $table->string('diameter')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('length')->nullable();
            $table->string('year')->nullable();
            $table->integer('categories_id')->nullable();
            $table->integer('ages_id')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('blogs');
    }
}
