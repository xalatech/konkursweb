<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFordringersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fordringer', function (Blueprint $table) {
            $table->id();
            $table->integer('firma_id')->unsigned()->index();
            $table->unsignedBigInteger('kreditor_id')->index();
            $table->string('fordringsnummer')->nullable();
            $table->string('pva')->nullable();
            $table->integer('fordringsklasse')->default(0);
            $table->date('anmeldtdato')->nullable();
            $table->string('saksnr')->nullable();
            $table->string('saksbehandler')->nullable();
            $table->string('epost')->nullable();
            $table->decimal('anmeldtbelop', 10, 2);
            $table->decimal('valuta', 10, 2);
            $table->decimal('innstiltbelop', 10, 2);
            $table->decimal('godkjentbelop', 10, 2);
            $table->string('koblingtildokumenasjon');

            $table->timestamps();

            $table->foreign('kreditor_id')->references('id')->on('kreditorer')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fordringer');
    }
}
