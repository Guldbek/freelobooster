<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobProgressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_progresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id');
            $table->string('current_rank');

            
            $table->timestamps();


        });
        Schema::table('job_progress', function(Blueprint $table) {
            $table->foreign('job_id')->reference('id')->on('jobs');
            $table->foreign('current_rank')->reference('id')->on('league_ranks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_progresses');
    }
}
