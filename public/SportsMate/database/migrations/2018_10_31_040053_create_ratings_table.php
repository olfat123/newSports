<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('rating'); // for avgs rate from [rating1, rating2, ..]
            $table->integer('rating1')->nullable(); // asked question1 to each model as its kind
            $table->integer('rating2')->nullable(); // asked question2 to each model as its kind
            $table->integer('rating3')->nullable(); // asked question3 to each model as its kind 
            $table->integer('rating4')->nullable(); // asked question4 to each model as its kind
            $table->integer('rating5')->nullable(); // asked question5 to each model as its kind
            $table->text('comment')->nullable(); //if user want to add some text cooment
            $table->integer('sport_id'); //for sport to get rated depending on sport
            $table->morphs('rateablein'); // to detect where this model take this rate
            $table->index('rateablein_id')->nullable();
            $table->index('rateablein_type')->nullable();
            $table->morphs('rateable'); //for the relation show the model to be rated
            $table->unsignedInteger('user_id')->index(); // the rate giver id
            $table->index('rateable_id');
            $table->index('rateable_type');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('ratings');
    }
}
