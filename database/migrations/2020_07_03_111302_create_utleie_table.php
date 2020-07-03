<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtleieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utleie', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bo_id')->index();
            $table->string('ForetaksNavn');
            $table->string('ForetaksType');
            $table->string('Adresse');
            $table->string('Postnr');
            $table->string('PostSted');
            $table->string('Epostadresse');
            $table->string('OrgNr');
            $table->date('UtlStiftelsesDato');

            $table->timestamps();
            $table->foreign('bo_id')->references('id')->on('bo_info')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utleie');
    }
}
