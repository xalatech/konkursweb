<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKreditorsTable extends Migration
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
            $table->integer('firma_id')->unsigned()->index();
            $table->unsignedBigInteger('bo_id')->index();
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
        Schema::dropIfExists('kreditorer');
    }
}
