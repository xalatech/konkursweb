<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekvirenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekvirenter', function (Blueprint $table) {
            $table->id();
            $table->string('Rekvirent');
            $table->string('KontaktPerson');
            $table->string('Adresse');
            $table->string('Postnr');
            $table->string('PostSted');
            $table->string('Epostadresse');
            $table->string('OrgNr');

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
        Schema::dropIfExists('rekvirenter');
    }
}
