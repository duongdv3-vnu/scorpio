<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('user_name')->unique();
            $table->string('email')->unique();
            $table->string('password', 60);

            /*
             * Define permission to access to administration area
             */
            $table->enum('permission', array('ADMINISTRATOR', 'MEMBER'))->default('MEMBER');
            /*
             * By default, every one can register as new user
             * However, to login into project, user is required activated
             * Only administrator can activate/deactivate user
             */
            $table->boolean('is_activated')->default(false);

            $table->rememberToken();
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
        Schema::drop('users');
    }
}
