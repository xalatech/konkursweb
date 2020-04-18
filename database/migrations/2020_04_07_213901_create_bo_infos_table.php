<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bo_infoer', function (Blueprint $table) {
            $table->id();
            $table->integer('firma_id')->unsigned()->index();
            $table->string('organisasjonsnummer')->unique();
            $table->string('saksnummer')->unique();
            $table->string('debitor');
            $table->integer('kommune_id');

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
        Schema::dropIfExists('bo_infoer');
    }
}
