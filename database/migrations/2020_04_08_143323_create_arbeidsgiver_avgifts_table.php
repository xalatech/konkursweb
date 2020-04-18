<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArbeidsgiverAvgiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aga', function (Blueprint $table) {
            $table->id();
            $table->string('sone');
            $table->string('sats');
            $table->unsignedBigInteger('kommune_id')->index();
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
        Schema::dropIfExists('aga');
    }
}
