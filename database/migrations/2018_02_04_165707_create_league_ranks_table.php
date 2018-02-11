<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeagueRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('league_ranks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rank');
            $table->integer('price');
            $table->timestamps();
        });
        Schema::table('order_infos', function (Blueprint $table) {
          $table->foreign('rank_from')->references('id')->on('league_ranks');
          $table->foreign('rank_to')->references('id')->on('league_ranks');
        });
        Schema::table('booster_groups', function (Blueprint $table) {
          $table->foreign('rank_from')->references('id')->on('league_ranks');
          $table->foreign('rank_to')->references('id')->on('league_ranks');
        });
        Schema::table('job_progresses', function (Blueprint $table) {
          $table->foreign('current_rank')->references('id')->on('league_ranks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('league_ranks');
    }
}
