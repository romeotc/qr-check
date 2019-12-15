<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peoples', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rfid',20)->charset('utf8')->default(0);
            $table->string('peopleid',20)->charset('utf8')->default(0);
            $table->smallInteger('title');
            $table->string('name',100)->charset('utf8')->default(0);
            $table->string('lastname',100)->charset('utf8')->default(0);
            $table->string('detail',100)->charset('utf8')->default(0);
            $table->bigInteger('groupid');
            $table->smallInteger('status');
            $table->smallInteger('sex');
            $table->smallInteger('track_status');
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
        Schema::dropIfExists('peoples');
    }
}
