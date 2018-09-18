<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateACommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_comments', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id')->index()->unsigned()->nullable();
            $table->integer('cont_id')->index()->unsigned()->nullable();

            $table->text('body');
            $table->text('answer')->nullable();

            $table->string('create_date');
            $table->string('update_date')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cont_id')->references('id')->on('a_contents')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('a_comments');
    }
}
