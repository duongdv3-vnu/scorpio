<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklists', function (Blueprint $table) {
            /*
             * Table schema
             +-----------------------------------------------------------+
             | id                     | Auto increment ID                |
             +------------------------+----------------------------------+
             | pvoucher_id            | Pvoucher of current checklist    |
             +------------------------+----------------------------------+
             | created_by             | User creates current checklist   |
             +------------------------+----------------------------------+
             | time_stamp             | Created/Updated date time        |
             +------------------------+----------------------------------+
             *
             * Basically, a pvoucher can have a number of checklists that
             * created by different users
             */
            $table->increments('id');
            $table->integer('pvoucher_id')->unsigned();
            $table->integer('created_by')->unsigned();
            $table->timestamps();

            $table->foreign('pvoucher_id')
                ->references('id')
                ->on('pvouchers')
                ->onDeleted('cascade');

            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->ondeleted('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('checklists');
    }
}
