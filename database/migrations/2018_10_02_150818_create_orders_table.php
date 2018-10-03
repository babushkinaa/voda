<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pu')->unsigned();
            $table->integer('zones_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->integer('statuss_id')->unsigned();
            $table->integer('overtimes_id')->unsigned();
            $table->integer('livaobjects_id')->unsigned();
            $table->integer('disablewaternets_id')->unsigned();
            $table->integer('categorys_id')->unsigned();
            $table->integer('types_id')->unsigned();
            $table->dateTime('create_time');
            $table->dateTime('start_time');
            $table->dateTime('closed_time');
            $table->text('comment');
            $table->text('addres');
            $table->boolean('dds')->nullable(false);
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->timestamps();
        });

        Schema::create('statuss', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->timestamps();
        });


        Schema::create('liveobjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('liveobject');
            $table->timestamps();
        });


        Schema::create('zones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('zone');
            $table->timestamps();
        });

        Schema::create('localitys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('zones_id')->unsigned();
            $table->string('locality');
            $table->timestamps();
        });

        Schema::create('overtimes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('workers');
            $table->dateTime('start_time');
            $table->dateTime('stop_time');
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
        Schema::dropIfExists('orders');
        Schema::dropIfExists('categorys');
        Schema::dropIfExists('types');
        Schema::dropIfExists('statuss');
        Schema::dropIfExists('overtimes');
        Schema::dropIfExists('zones');
        Schema::dropIfExists('liveobjects');
        Schema::dropIfExists('localitys');
    }
}
