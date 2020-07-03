<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoRegnskapsKontorerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bo_regnskaps_kontorer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bo_id')->index();
            $table->unsignedBigInteger('regnskaps_kontor_id')->index();
            $table->date('RegnskapsForerOppdragFraDato');

            $table->timestamps();

            $table->foreign('bo_id')->references('id')->on('bo_info')->onDelete('cascade');
            $table->foreign('regnskaps_kontor_id')->references('id')->on('regnskaps_kontorer')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bo_regnskaps_kontorer');
    }
}
