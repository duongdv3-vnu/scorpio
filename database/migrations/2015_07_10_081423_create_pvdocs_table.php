<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePvdocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pvdocs', function (Blueprint $table) {
            /*
             |----------------------------------------------+
             | id          |                                |
             |----------------------------------------------+
             | doc_name    | Save name of P-voucher document|
             |----------------------------------------------+
             | time_stamp  |                                |
             |----------------------------------------------+
             */
            $table->increments('id');
            $table->string('doc_name');
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
        /*
         * Drop all tables on reset
         */
        Schema::drop('pvdocs');
    }
}
