<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecklistItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklist_items', function (Blueprint $table) {
            /*
             * Table schema
             +-----------------------------------------------------------+
             | id                     | Auto increment ID                |
             +------------------------+----------------------------------+
             | checklist_item_name    | Save name of P-voucher document  |
             +------------------------+----------------------------------+
             | pvdoc_id               | Foreign key to pvdocs table      |
             +------------------------+----------------------------------+
             | is_for_PIC             | To display on checklist for PIC  |
             +------------------------+----------------------------------+
             | is_for_PL              | To display on checklist for PL/TL|
             +------------------------+----------------------------------+
             | is_for_QA              | To display on checklist for QA   |
             +------------------------+----------------------------------+
             | time_stamp             | Created/Updated date time        |
             +------------------------+----------------------------------+
             *
             */
            $table->increments('id');
            $table->string('checklist_item_name');
            $table->integer('pvdoc_id')->unsigned();
            $table->boolean('is_for_PIC');
            $table->boolean('is_for_PL');
            $table->boolean('is_for_QA');

            $table->timestamps();

            $table->foreign('pvdoc_id')
                  ->references('id')
                  ->on('pvdocs')
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
        Schema::drop('checklist_items');
    }
}
