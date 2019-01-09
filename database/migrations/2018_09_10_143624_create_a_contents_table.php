<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id')->index()->unsigned()->nullable();
            $table->integer('job_id')->index()->unsigned()->nullable();
            $table->integer('field_id')->index()->unsigned()->nullable();
            $table->integer('cat_id')->index()->unsigned()->nullable();

            $table->string('title');
            $table->text('description')->nullable();
            $table->string('file_name');
            $table->string('format');
            $table->float('rate')->default(0.0);
            $table->integer('rate_count')->default(0);
            $table->integer('download_count')->default(0);
            $table->text('download_count')->nullable();
            $table->integer('sell')->nullable()->default(0);
            $table->integer('off')->nullable()->default(0);
            $table->integer('price')->default(0);
            $table->string('demo_file')->nullable();

            $table->string('create_date');
            $table->string('publish_date')->nullable();
            $table->string('update_date')->nullable();
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('a_contents');
    }
}
