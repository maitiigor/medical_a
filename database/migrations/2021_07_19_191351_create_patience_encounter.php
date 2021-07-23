<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatienceEncounter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patience_encounter', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time');
            $table->string('visit_type');
            $table->integer('weight');
            $table->integer('height');
            $table->integer('bmi');
            $table->integer('temperature');
            $table->integer('respiratory rate');
            $table->string('complaint');
            $table->string('diagnosis');
            $table->string('treatment_plan');
            $table->unsignedBigInteger('patience_id');
            $table->unsignedBigInteger('health_worker_id');
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
        Schema::dropIfExists('patience_encounter');
    }
}
