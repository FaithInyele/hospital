<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImmunizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immunizes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('infant_id');
            $table->date('dginfu1');
            $table->date('dnextbe1');
            $table->date('dchpresent');
            $table->date('dchabsent');
            $table->date('drepabsent');
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
        Schema::dropIfExists('immunizes');
    }
}
