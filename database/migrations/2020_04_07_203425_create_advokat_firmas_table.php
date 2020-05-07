<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvokatFirmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advokat_firmaer', function (Blueprint $table) {
            $table->id('firma_id');
            $table->string('navn')->index();
            $table->string('adresse')->nullable();
            $table->string('postnummer')->nullable();
            $table->string('poststed')->nullable();
            $table->string('epost');
            $table->string('banknavn')->nullable();
            $table->string('bankkonto')->nullable();
            $table->string('organisasjonsnummer')->nullable();
            $table->string('kontaktperson')->nullable();
            $table->string('fakturamottaker')->nullable();
            $table->decimal('pris_per_bo', 10, 2)->default(0.00);
            $table->boolean('aktiv')->default(false);
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
        Schema::dropIfExists('advokat_firmaer');
    }
}
