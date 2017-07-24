<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('infants_id')->unsigned();
            $table->foreign('infants_id')->references('id')->on('infant_details')->onDelete('cascade');
            $table->string('mothers_first_name');
            $table->string('mothers_last_name');
            $table->string('mothers_other_names');
            $table->integer('mothers_id_no');
            $table->integer('mothers_telephone_number');
            $table->string('fathers_first_name');
            $table->string('fathers_last_name');
            $table->string('fathers_other_names');
            $table->integer('fathers_id_no');
            $table->integer('fathers_telephone_number');
            $table->string('parents_marital_status');
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
        Schema::dropIfExists('parent_details');
    }
}
