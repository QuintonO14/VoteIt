<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('detail','10000');
            $table->string('link', '500')->nullable();
            $table->timestamps();
        });

        DB::table('topics')->insert([
            'id' => '1',
            'name' => 'What are YOUR feelings about this website?',
            'detail' => 'Just an easy topic to get you started! Simply UPVOTE or DOWNVOTE your feelings towards this site!
             With VoteIt you can vote on topics that are listed without and see the what the popularity is for each topic!
             You can also make your own voting ballots for others to answer!'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topics');
    }
}
