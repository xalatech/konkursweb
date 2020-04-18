<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLonnsArtersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lonns_arter', function (Blueprint $table) {
            $table->id();
            $table->integer('firma_id')->unsigned()->index();
            $table->unsignedBigInteger('lonns_data_id')->index();
            $table->string('kode');
            $table->string('tekst');
            $table->decimal('skattegrunnlag', 10, 2);
            $table->decimal('arbeidsgiveravgift', 10, 2);
            $table->decimal('feriepengergrunnlag', 10, 2);
            $table->integer('altinkode');

            $table->timestamps();

            $table->foreign('lonns_data_id')->references('id')->on('lonns_data')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lonns_arter');
    }
}
