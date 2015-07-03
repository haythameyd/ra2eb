<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->increments('rate_id')->unique();
            $table->integer('proj_id');
            $table->char('user_id',25)->default('0');
            $table->tinyinteger('approved')->nullable();
            $table->text('comment');
            $table->decimal('rating_count',10,2)->default('0.00');
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
        Schema::drop('review');
    }
}
