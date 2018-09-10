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
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('author_id');
            $table->string('job_id');
            $table->string('field_id');
            $table->string('file_name');
            $table->string('format');
            $table->string('publish_date')->nullable();
            $table->float('rate')->default(0.0);
            $table->integer('rate_count')->default(0);
            $table->integer('download_count')->default(0);
            $table->text('download_count')->nullable();
            $table->string('cat_id');
            $table->integer('sell')->nullable()->default(0);
            $table->integer('off')->nullable()->default(0);
            $table->integer('price')->default(0);
            $table->string('demo_file')->nullable();

            $table->timestamps();
            $table->string('create_date');
            $table->string('update_date')->nullable();

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
