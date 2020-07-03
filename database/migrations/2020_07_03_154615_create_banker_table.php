<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banker', function (Blueprint $table) {
            $table->id();
            $table->string('BankNavn');
            $table->string('BankAdresse');
            $table->string('BankPostNr');
            $table->string('BankPostSted');
            $table->string('BankEpostAdresse');
            $table->string('BankFylke');
            $table->string('BankKommune');
            $table->string('BankOrgNr');

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
        Schema::dropIfExists('banker');
    }
}
