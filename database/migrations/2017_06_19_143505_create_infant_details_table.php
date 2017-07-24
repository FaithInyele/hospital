<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfantDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infant_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_names');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->date('date_first_seen');
            $table->double('weight_in_kgs');
            $table->double('length_in_cm');
            $table->string('county');
            $table->string('sub_county');
            $table->string('town');
            $table->string('estate');
            $table->string('place_of_birth');
            $table->string('special_needs');
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
        Schema::dropIfExists('infant_details');
    }
}
