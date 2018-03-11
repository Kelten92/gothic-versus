<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('lvl');
            $table->integer('health');
            $table->integer('strength');
            $table->integer('dexterity');
            $table->integer('intelligence');
            $table->integer('stamina');
            $table->integer('alertness');
            $table->integer('knowledge');
            $table->integer('charisma');
            $table->integer('stealth');
            $table->integer('inquisitiveness');
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
        Schema::dropIfExists('skills');
    }
}
