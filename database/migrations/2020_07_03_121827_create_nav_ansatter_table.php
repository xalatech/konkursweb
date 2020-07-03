<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavAnsatterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nav_ansatter', function (Blueprint $table) {
            $table->id();
            $table->string('Fornavn');
            $table->string('Etternavn');
            $table->string('Brukernavn');
            $table->string('Epostadresse');
            $table->string('NavKontor');
            $table->string('NavOrgNr');
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
        Schema::dropIfExists('nav_ansatter');
    }
}
