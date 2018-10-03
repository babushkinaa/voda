<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDisablewaternet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disablewaternets', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->dateTime('datetime');
            $table->string('dispetcher_dds');
            $table->integer('diametr');
            $table->string('material',15);
            $table->integer('sum_people');
            $table->integer('sum_livehouse');
            $table->integer('sum_privatehouse');
            $table->integer('sum_socialhouse');
            $table->integer('sum_ingenerhouse');
            $table->integer('sum_otherhouse');
            $table->integer('sum_disablehouse');
            $table->text('addres_disablehouse');
            $table->boolean('senddispdds')->nullable(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('disablewaternets', function (Blueprint $table) {
            //
            Schema::dropIfExists('disablewaternets');

        });
    }
}
