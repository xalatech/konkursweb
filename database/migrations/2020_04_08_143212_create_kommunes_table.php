<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKommunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kommuner', function (Blueprint $table) {
            $table->id();
            $table->string('kommunenummer');
            $table->string('kommune');
            $table->string('adresse');
            $table->string('postnummer');
            $table->string('poststed');
            $table->string('epost')->nullable();
            $table->string('banknavn')->nullable();
            $table->string('bankkonto')->nullable();

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
        Schema::dropIfExists('kommuner');
    }
}
