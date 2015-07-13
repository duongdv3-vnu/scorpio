<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecklistDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklist_details', function (Blueprint $table) {

            /*
             * Table schema
             +-----------------------------------------------------------+
             | id                     | Auto increment ID                |
             +------------------------+----------------------------------+
             | checklist_id           | checklist_id that item belongs to|
             +------------------------+----------------------------------+
             | checklist_item_id      | Content of current checklist item|
             +------------------------+----------------------------------+
             | result                 | Result (OK/NG/NA)                |
             +------------------------+----------------------------------+
             | comment                | comment related to current item  |
             +------------------------+----------------------------------+
             | time_stamp             | Created/Updated date time        |
             +------------------------+----------------------------------+
             *
             */

            $table->increments('id');
            $table->integer('checklist_id')->unsigned();
            $table->integer('checklist_item_id')->unsigned();
            $table->enum('result', array('OK', 'NG', 'N/A'));
            $table->string('comment');
            $table->timestamps();

            $table->foreign('checklist_id')
                ->references('id')
                ->on('checklists')
                ->onDelete('cascade');

            $table->foreign('checklist_item_id')
                ->references('id')
                ->on('checklist_items')
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
        Schema::drop('checklist_details');
    }
}
