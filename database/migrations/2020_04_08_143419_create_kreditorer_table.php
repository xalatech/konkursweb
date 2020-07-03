<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKreditorerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kreditorer', function (Blueprint $table) {
            $table->id();
            $table->string('Kreditor');
            $table->string('Adresse')->nullable();
            $table->string('PostNr')->nullable();
            $table->string('PostSted')->nullable();
            $table->string('EpostAdresse')->nullable();
            $table->string('BankNavn')->nullable();
            $table->string('BankKonto')->nullable();
            $table->string('SwiftKode')->nullable();
            $table->string('KontaktPerson')->nullable();
            $table->boolean('OnskerFordringsBekreftelse')->default(true);
            $table->boolean('OnskerEposter')->default(true);

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
        Schema::dropIfExists('kreditorer');
    }
}
