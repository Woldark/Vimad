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
            $table->integer('job_id')->index()->unsigned()->nullable();
            $table->integer('field_id')->index()->unsigned()->nullable();
            $table->integer('category_id')->index()->unsigned()->nullable();;
            $table->integer('author_id')->index()->unsigned()->nullable();;

            $table->string('name');
            $table->string('thumbnail');
            $table->string('event_date');
            $table->string('place');
            $table->text('description')->nullable();
            $table->float('rate')->default(0.0);
            $table->integer('rate_count')->default(0);
            $table->integer('seen_count')->default(0);
            $table->integer('download_count')->default(0);
            $table->float('length')->default(0.0);
            $table->string('title');
            $table->string('sell')->nullable()->default(0);
            $table->integer('size')->default(0);
            $table->tinyInteger('active')->default(0);
            $table->string('file_name');
            $table->string('slug');
            $table->string('price')->default(0);
            $table->integer('off')->nullable()->default(0);
            $table->text('tags')->nullable();

            $table->string('create_date');
            $table->string('update_date')->nullable();
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
        Schema::dropIfExists('c_contents');
    }
}
