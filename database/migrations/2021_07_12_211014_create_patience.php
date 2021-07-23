<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatience extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patience', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('bmi')->nullable();
            $table->string('ward')->nullable();
            $table->string('lga')->nullable();
            $table->string('state')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('password')->nullable();
            $table->string('picture')->nullable();
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
        Schema::dropIfExists('patience');
    }
}
