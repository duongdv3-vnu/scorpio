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

            /*
             * Table schema
             +-----------------------------------------------------------+
             | id                     | Auto increment ID                |
             +------------------------+----------------------------------+
             | user_name              | Should be FPT Software Account   |
             +------------------------+----------------------------------+
             | email                  | account@fsoft.com.vn             |
             +------------------------+----------------------------------+
             | password               | Hash encrypted password          |
             +------------------------+----------------------------------+
             | role                   | Role of user create checklist    |
             +------------------------+----------------------------------+
             | permission             | Role to access admin area on Web |
             +------------------------+----------------------------------+
             | is_activated           | Flag to hold user account status |
             +------------------------+----------------------------------+
             | remember_token         | Save user login state            |
             +------------------------+----------------------------------+
             | time_stamp             | Created/Updated date time        |
             +------------------------+----------------------------------+
             *
             */

            $table->increments('id');
            $table->string('user_name')->unique();
            $table->string('email')->unique();
            $table->string('password', 60);

            /*
             * Roll of users
             * Default will be PIC
             */

            $table->enum('role', array('PIC', 'PL', 'QA'))->default('PIC');

            /*
             * Define permission to access to administration area
             */
            $table->enum('permission', array('ADMINISTRATOR', 'MEMBER'))->default('MEMBER');

            /*
             * By default, every one can register as new user
             * However, to login into project, user is
             * required activated
             *
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
