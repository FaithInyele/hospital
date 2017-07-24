<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('infants_number');
            $table->string('infants_names');
            $table->string('mothers_names');
            $table->integer('mothers_id_no');
            $table->integer('mothers_telephone_number');
            $table->string('fathers_names');
            $table->integer('fathers_id_no');
            $table->integer('fathers_telephone_number');
            $table->string('postal_address');
            $table->string('town');
            $table->date('date_to_be_seen');
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
        Schema::dropIfExists('appointments');
    }
}
