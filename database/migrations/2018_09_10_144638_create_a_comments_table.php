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
            $table->string('user_id');
            $table->string('cont_id');
            $table->text('body');
            $table->text('answer')->nullable();

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
        Schema::dropIfExists('a_comments');
    }
}
