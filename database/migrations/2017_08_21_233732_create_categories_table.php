<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        DB::table('categories')->insert([
            'id' => '1',
            'name' => 'Sports',
        ]);

        DB::table('categories')->insert([
            'id' => '2',
            'name' => 'World News',
        ]);

        DB::table('categories')->insert([
            'id' => '3',
            'name' => 'Entertainment',
        ]);

        DB::table('categories')->insert([
            'id' => '4',
            'name' => 'Science',
        ]);

        DB::table('categories')->insert([
            'id' => '5',
            'name' => 'Health',
        ]);

        DB::table('categories')->insert([
            'id' => '6',
            'name' => 'Miscellaneous',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
