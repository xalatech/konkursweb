<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoRevisjonsKontorerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bo_revisjons_kontorer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bo_id')->index();
            $table->unsignedBigInteger('revisjons_kontor_id')->index();
            $table->date('RevisjonsOppdragFraDato');

            $table->timestamps();

            $table->foreign('bo_id')->references('id')->on('bo_info')->onDelete('cascade');
            $table->foreign('revisjons_kontor_id')->references('id')->on('revisjons_kontorer')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bo_revisjons_kontorer');
    }
}
