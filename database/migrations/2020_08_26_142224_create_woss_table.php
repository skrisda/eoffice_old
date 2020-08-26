<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWossTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('woss', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->integer('uid');
            $table->date('rdate');
            $table->tinyInteger('type');
            $table->string('title', 255);
            $table->date('work_from');
            $table->date('work_to');
            $table->string('place', 255);
            $table->integer('province');
            $table->dateTime('travel_date');
            $table->dateTime('return_date');
            $table->boolean('fee');
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
        Schema::dropIfExists('woss');
    }
}
