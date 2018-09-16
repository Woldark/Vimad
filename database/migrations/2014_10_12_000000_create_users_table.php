<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->index()->unsigned()->nullable();
            $table->integer('field_id')->index()->unsigned()->nullable();

            $table->string('f_name');
            $table->string('l_name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->text('address')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('email_confirm')->default(0);
            $table->tinyInteger('phone_confirm')->default(0);
            $table->string('password');
            $table->rememberToken();

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
        Schema::dropIfExists('users');
    }
}
