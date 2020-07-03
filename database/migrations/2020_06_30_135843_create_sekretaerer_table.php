<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSekretaererTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekretaerer', function (Blueprint $table) {
            $table->id();
            $table->string('SekretaerSaksbehandler');
            $table->string('SekretaerensTittel');
            $table->string('SekretaerensEpostadresse');
            $table->string('SekretaerensInitialer');
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
        Schema::dropIfExists('sekretaerer');
    }
}
