<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('user_id')->unique();
            $table->char('fb_id',25)->default('0000000000000000000000000');
            $table->char('password',50)->nullable();
            $table->char('email',250)->unique()->nullable();
            $table->tinyinteger('gender')->default('0');
            $table->integer('age')->default('0');
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
        Schema::drop('user');
    }
}
