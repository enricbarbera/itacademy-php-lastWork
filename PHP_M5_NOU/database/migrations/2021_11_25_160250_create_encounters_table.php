<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encounters', function (Blueprint $table) {
            $table->id();

            $table->foreignId('team_1_id')->references('id')->on('teams')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('team_2_id')->references('id')->on('teams')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamp('when');
            $table->string('where')->nullable();

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
        Schema::dropIfExists('encounters');
    }
}
