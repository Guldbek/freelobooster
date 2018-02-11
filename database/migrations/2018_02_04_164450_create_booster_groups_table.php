<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoosterGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booster_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('payment_percentage');
            $table->integer('rank_from')->unsigned();
            $table->integer('rank_to')->unsigned();
            $table->timestamps();
        });
        Schema::table('boosters', function (Blueprint $table) {
            $table->foreign('booster_group_id')->references('id')->on('booster_groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booster_groups');
    }
}
