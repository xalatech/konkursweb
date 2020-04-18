<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegnskapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regnskap', function (Blueprint $table) {
            $table->id('bilags_id');
            $table->integer('firma_id')->unsigned()->index();
            $table->unsignedBigInteger('bo_id')->index();
            $table->string('bilagsnummer');
            $table->string('tekst')->nullable();
            $table->string('debetkonto')->nullable();
            $table->string('reditkonto')->nullable();
            $table->string('avgiftskode')->nullable();
            $table->decimal('belop', 10, 2)->default(0.00);
            $table->string('merknad')->nullable();
            $table->boolean('betalt')->default(false);
            $table->boolean('spesifiseres')->default(false);

            $table->timestamps();

            $table->foreign('bo_id')->references('id')->on('bo_infoer')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regnskap');
    }
}
