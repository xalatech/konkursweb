<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevisorerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revisorer', function (Blueprint $table) {
            $table->id();
            $table->string('Borevisor');
            $table->string('FirmaNavn');
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
        Schema::dropIfExists('revisorer');
    }
}
