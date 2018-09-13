<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('title');
            $table->text('body');
            $table->string('type');
            $table->string('cat_id');
            $table->string('job_id');
            $table->string('field_id');
            $table->string('field_id');
            $table->text('tags')->nullable();
            $table->string('image')->nullable();
            $table->string('source')->nullable();

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
        Schema::dropIfExists('n_contents');
    }
}
