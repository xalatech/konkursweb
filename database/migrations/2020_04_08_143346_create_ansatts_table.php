<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnsattsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ansatter', function (Blueprint $table) {
            $table->id();
            $table->integer('firma_id')->unsigned()->index();
            $table->unsignedBigInteger('bo_id')->index();
            $table->string('fornavn');
            $table->string('etternavn');
            $table->string('epost')->nullable();
            $table->string('stilling')->nullable();
            $table->string('stilling_prosent')->nullable();

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
        Schema::dropIfExists('ansatter');
    }
}
