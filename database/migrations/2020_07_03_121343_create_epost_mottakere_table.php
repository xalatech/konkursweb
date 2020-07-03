<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpostMottakereTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epost_mottakere', function (Blueprint $table) {
            $table->id();
            $table->string('Navn');
            $table->string('Tittel');
            $table->string('Epostadresse');
            $table->string('Initialer');
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
        Schema::dropIfExists('epost_mottakere');
    }
}
