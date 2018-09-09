<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_contents', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('thumbnail');
            $table->string('event_date');
            $table->string('place');
            $table->string('job_id');
            $table->string('field_id');
            $table->text('description')->nullable();
            $table->float('rate')->default(0.0);
            $table->integer('rate_count')->default(0);
            $table->integer('seen_count')->default(0);
            $table->integer('download_count')->default(0);
            $table->float('length')->default(0.0);
            $table->string('category_id');
            $table->string('author_id');
            $table->string('title');
            $table->string('sell')->nullable()->default(0);
            $table->integer('size')->default(0);
            $table->tinyInteger('active')->default(0);
            $table->string('file_name');
            $table->string('slug');
            $table->string('price')->default(0);
            $table->integer('off')->default(0);
            $table->text('tags')->nullable();

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
        Schema::dropIfExists('c_contents');
    }
}
