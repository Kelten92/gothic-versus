<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fights', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('npc_a_id')->unsigned();
            $table->integer('npc_b_id')->unsigned();
            $table->foreign('npc_a_id')->references('id')->on('npcs');
            $table->foreign('npc_b_id')->references('id')->on('npcs');
            $table->longText('descryption');
            $table->timestamp('start_date');
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
        Schema::dropIfExists('fights');
    }
}
