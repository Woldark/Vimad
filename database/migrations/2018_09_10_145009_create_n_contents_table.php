<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('n_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id')->index()->unsigned()->nullable();
            $table->integer('job_id')->index()->unsigned()->nullable();
            $table->integer('field_id')->index()->unsigned()->nullable();

            $table->string('title');
            $table->text('body');
            $table->string('type');
            $table->text('tags')->nullable();
            $table->string('image')->nullable();
            $table->string('source')->nullable();

            $table->string('create_date');
            $table->string('update_date')->nullable();
            $table->timestamps();

            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cat_id')->references('id')->on('c_categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('n_contents');
    }
}
