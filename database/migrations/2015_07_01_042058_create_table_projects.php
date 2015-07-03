<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('proj_id');
            $table->text('prj_name');
            $table->tinyInteger('city');
            $table->integer('rating_total')->default('0');
            $table->decimal('rating_count',10,1)->default('0.0');
            $table->text('short_desc');
            $table->text('long_desc');
            $table->text('icon');
            $table->text('category');
            $table->text('attach');
            $table->char('progress',1)->default('i');




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
        Schema::drop('projects');
    }
}
