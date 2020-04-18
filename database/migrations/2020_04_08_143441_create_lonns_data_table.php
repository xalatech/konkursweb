<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLonnsDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lonns_data', function (Blueprint $table) {
            $table->id();
            $table->integer('firma_id')->unsigned()->index();
            $table->unsignedBigInteger('ansatt_id')->index();
            $table->unsignedBigInteger('lonns_arter_id')->index();
            $table->timestamps();

            $table->foreign('ansatt_id')->references('id')->on('ansatter')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lonns_data');
    }
}
