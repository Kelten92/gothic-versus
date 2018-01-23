<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNpcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('npcs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('avatar');
            $table->integer('lvl');
            $table->integer('strength');
            $table->integer('dexterity');
            $table->integer('mana');
            $table->integer('health');
            $table->integer('1h_weapons');
            $table->integer('2h_weapons');
            $table->integer('bow');
            $table->integer('crossbow');
            $table->integer('ring_of_magic');
            $table->integer('weapon_id')->unsigned();
            $table->integer('armor_id')->unsigned();
            $table->foreign('weapon_id')->references('id')->on('weapons');
            $table->foreign('armor_id')->references('id')->on('armors');
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
        Schema::dropIfExists('npcs');
    }
}
