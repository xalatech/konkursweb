<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFordringsKlassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fordrings_klasser', function (Blueprint $table) {
            $table->id();
            $table->string('klasseforkortelse')->nullable();
            $table->string('klasse')->nullable();
            $table->integer('sortering')->default(0);

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
        Schema::dropIfExists('fordrings_klasser');
    }
}
