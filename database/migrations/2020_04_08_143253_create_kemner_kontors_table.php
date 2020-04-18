<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKemnerKontorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kemner_kontorer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kommune_id')->index();
            $table->string('kemnerkontor');
            $table->string('adresse');
            $table->string('postnummer');
            $table->string('poststed');
            $table->string('epost')->nullable();
            $table->string('banknavn')->nullable();
            $table->string('bankkonto')->nullable();
            $table->timestamps();

            $table->foreign('kommune_id')->references('id')->on('kommuner')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kemner_kontorer');
    }
}
