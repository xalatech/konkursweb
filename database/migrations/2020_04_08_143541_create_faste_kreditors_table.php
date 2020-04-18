<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasteKreditorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faste_kreditorer', function (Blueprint $table) {
            $table->id();
            $table->string('navn');
            $table->string('adresse')->nullable();
            $table->string('postnummer')->nullable();
            $table->string('poststed')->nullable();
            $table->string('epost')->nullable();
            $table->string('banknavn')->nullable();
            $table->string('bankkonto')->nullable();
            $table->string('swiftkode')->nullable();
            $table->string('kontaktperson')->nullable();
            $table->boolean('onsker_fordrings_bekreftelse')->default(true);
            $table->boolean('onsker_eposter')->default(true);
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
        Schema::dropIfExists('faste_kreditorer');
    }
}
