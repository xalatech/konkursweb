<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bo_info', function (Blueprint $table) {
            $table->id();
            $table->integer('firma_id')->unsigned()->index();
            $table->string('boetsOrgNr')->unique();
            $table->string('saksnummer')->unique();
            $table->string('debitor');
            $table->string('bransjeKode');
            $table->string('bransje');
            $table->string('lagmannsrettensNavn');
            $table->string('boetsBankKontoNr');
            $table->string('linkTilKjennelse');
            $table->string('vaarReferanse');
            $table->string('journalNr');
            $table->string('advokat');
            $table->smallInteger('oppbud');
            $table->string('tingrett');
            $table->string('dommersTitleNavn');
            $table->smallInteger('forenkletBobehandling');
            $table->string('typeBoAvslutning');
            $table->date('fristDato');
            $table->date('aapningsDato');
            $table->time('aapningsKlokkeslett');
            $table->date('kjennelsesDato');
            $table->time('kjennelsesKlokkeslett');
            $table->date('anmeldingsFrist');
            $table->date('datoForRegistreringsForretning');
            $table->string('stedFoersteSkiftesamling');
            $table->date('datoFoersteSkiftesamling');
            $table->time('klokkeslettFoersteSkiftesamling');
            $table->date('datoMidlertidigInnberetning');
            $table->date('klageFristMidlertidigInnberetning');
            $table->date('datoSluttInnberetning');
            $table->date('klageFristSluttInnberetning');
            $table->date('datoAarsredegjoerelse1');
            $table->date('datoAarsredegjoerelse2');
            $table->date('datoAarsredegjoerelse3');
            $table->date('datoKjennelseForSalaerFastsettelse');
            $table->date('klageFristForSalaerFastsettelse');
            $table->date('rettskraftUtbetalingsDato');
            $table->text('friTekst');
            $table->smallInteger('mvaPliktig');
            $table->string('bankHovedforbindelse');
            $table->date('begjaeringsDato');
            $table->date('begjaeringsDatoInnkommetTingretten');
            $table->time('begjaeringsKlokkeslettInnkommetTingretten');

            $table->date('ekstraDato1');
            $table->date('ekstraDato2');
            $table->date('ekstraDato3');
            $table->date('ekstraDato4');
            $table->date('ekstraDato5');

            $table->time('EkstraKlokkeSlett1');
            $table->time('EkstraKlokkeSlett2');
            $table->time('EkstraKlokkeSlett3');
            $table->time('EkstraKlokkeSlett4');
            $table->time('EkstraKlokkeSlett5');

            $table->text('ekstraTekstFelt1');
            $table->text('ekstraTekstFelt2');
            $table->text('ekstraTekstFelt3');
            $table->text('ekstraTekstFelt4');
            $table->text('ekstraTekstFelt5');
            $table->text('ekstraTekstFelt6');
            $table->text('ekstraTekstFelt7');
            $table->text('ekstraTekstFelt8');
            $table->text('ekstraTekstFelt9');
            $table->text('ekstraTekstFelt10');

            $table->string('dividendeklasse');
            $table->string('diviKlasse');
            $table->string('dividendeProsent');
            $table->string('etterUtlodningsDividendeklasse');
            $table->string('etterUtlodningsDiviKlasse');
            $table->string('etterUtlodningsDividendeProsent');

            $table->text('formael');
            $table->smallInteger('enkeltmannsForetak');
            $table->string('personNavn');
            $table->string('foedselsNummer');
            $table->string('personAdresse');
            $table->string('personPostNr');
            $table->string('personPostSted');
            $table->string('personEpostAdresse');

            $table->date('etterutlodningDatoReaapning');
            $table->date('etterutlodningDatoForSalaerFastsettelse');
            $table->date('etterutlodningFristDatoForBemerkninger');
            $table->date('etterutlodningDatoForKjennelseSlutning');
            $table->date('etterutlodningDatoForUtbetaling');
            $table->text('etterUtlodningNotater');

            $table->date('oppsigelsesDato');
            $table->date('oppsigelsesFristFraDato');

            $table->date('stiftelsesDato');
            $table->date('registreringsDato');
            $table->string('aksjekapital');
            $table->text('vedtektsfestetFormaal');
            $table->text('gjeldsgrunnlag');
            $table->text('regnskapsKommentarer');

            $table->string('utlOrgNr');
            $table->string('utlForetaksNavn');
            $table->string('UtlForetaksType');
            $table->string('UtlForretningsAdresse');
            $table->date('UtlStiftelsesDato');
            $table->string('KonkursdebitorsBankforbindelse');
            $table->string('Kemnerkontor');
            $table->string('KonkursdebitorsRevisorsOrgNr');
            $table->date('RegistreringsDatoMva');
            $table->string('KreditorUtvalgsEtat');
            $table->string('KonkursDebitorsKemnerKontor');
            $table->date('BegjaeringsdatoInnkommetTingretten');
            $table->date('BegjaeringsTidspunktInnkommetTingretten');


            $table->integer('boetsKemnerKontor')->unsigned();
            $table->integer('boetsKommune')->unsigned();
            $table->integer('boRevisor')->unsigned();
            $table->integer('boType')->unsigned();
            $table->integer('hvemSittKonkursbo')->unsigned();

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
        Schema::dropIfExists('bo_infoer');
    }
}
