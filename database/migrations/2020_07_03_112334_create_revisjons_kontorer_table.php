<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevisjonsKontorerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revisjons_kontorer', function (Blueprint $table) {
            $table->id();
            $table->string('RevisjonsKontor');
            $table->string('RevisorNavn');
            $table->string('RevisorAdresse');
            $table->string('RevisorPostNr');
            $table->string('RevisorPostSted');
            $table->string('RevisorOrgNr');
            $table->string('RevisorPostTelefon');
            $table->string('RevisorEPostAdresse');
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
        Schema::dropIfExists('revisjons_kontorer');
    }
}
