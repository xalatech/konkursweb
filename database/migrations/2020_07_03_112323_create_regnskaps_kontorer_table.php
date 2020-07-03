<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegnskapsKontorerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regnskaps_kontorer', function (Blueprint $table) {
            $table->id();
            $table->string('RegnskapsKontor');
            $table->string('RegnskapsForerNavn');
            $table->string('RegnskapsForerAdresse');
            $table->string('RegnskapsForerPostNr');
            $table->string('RegnskapsForerPostSted');
            $table->string('RegnskapsForerTelefon');
            $table->string('RegnskapsForerOrgNr');
            $table->string('RegnskapsForerEpostAdresse');
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
        Schema::dropIfExists('regnskaps_kontorer');
    }
}
