<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePvouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pvouchers', function (Blueprint $table) {

            /*
             * Table schema
             +-----------------------------------------------------------+
             | id                     | Auto increment ID                |
             +------------------------+----------------------------------+
             | ip_no                  | IP management no (eg, IP0032)    |
             +------------------------+----------------------------------+
             | vvrrss                 | VVRRSS of current IP (eg, 101011)|
             +------------------------+----------------------------------+
             | assigned_user_id       | PIC of current P-voucher         |
             +------------------------+----------------------------------+
             | time_stamp             | Created/Updated date time        |
             +------------------------+----------------------------------+
             *
             */
            $table->increments('id');
            $table->string('ip_no');
            $table->string('vvrrss');
            $table->integer('assigned_user_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('assigned_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pvouchers');
    }
}
