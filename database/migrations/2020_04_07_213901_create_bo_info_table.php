<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoInfoTable extends Migration
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

            //Sekretær tabell
            $table->integer('SekretaerSaksbehandler_id')->unsigned();
            //Bransje tabell
            $table->integer('Bransje_id')->unsigned();
            //Kommune tabell
            $table->integer('BoetsKommune_id')->unsigned();
            //Kemnerkontor tabell
            $table->integer('BoetsKemnerKontor_id')->unsigned();

            $table->string('LagmannsrettensNavn');
            $table->string('Boetsbankkontonr');
            $table->string('LinkTilKjennelse');
            $table->string('VaarReferanse');
            $table->string('Advokat');
            $table->string('Journalnr');
            $table->smallInteger('Oppbud');
            $table->string('Boetsorgnr');

            //Borevisor tabell
            $table->integer('Borevisor_id')->unsigned();

            //LederKreditorUtvalg tabell
            $table->integer('LederKreditorUtvalg_id')->unsigned();

            $table->string('Tingrett');

            //Separat tabell for botyper
            $table->string('Botype');

            $table->string('DommersTittelNavn');
            $table->string('HvemSittKonkursbo');
            $table->smallInteger('forenkletBobehandling');

            //Separat tabell for BoAvsultninger
            $table->string('TypeBoavslutning');
            $table->date('Fristdato');
            $table->date('Aapningsdato');
            $table->time('AapningsKlokkeslett');
            $table->date('Kjennelsesdato');
            $table->time('KjennelsesKlokkeslett');
            $table->date('Anmeldingsfrist');
            $table->date('DatoForRegistreringsForretning');
            $table->string('StedFoersteSkiftesamling');
            $table->date('DatoFoersteSkiftesamling');
            $table->time('KlokkeslettFoersteSkiftesamling');
            $table->date('DatoMidlertidigInnberetning');
            $table->date('KlageFristMidlertidigInnberetning');
            $table->date('DatoSluttInnberetning');
            $table->date('KlageFristSluttInnberetning');
            $table->date('DatoAarsredegjorelse1');
            $table->date('DatoAarsredegjorelse2');
            $table->date('DatoAarsredegjorelse3');
            $table->date('DatoKjennelseForSalaerFastsettelse');
            $table->date('KlageFristForSalaerFastsettelse');
            $table->date('DatoSlutningUtlodning');
            $table->date('RettskraftUtbetalingsDato');
            $table->text('FriTekst');
            $table->smallInteger('MvaPliktig');
            $table->string('BankHovedforbindelse');
            $table->date('BegjaeringsDato');

            $table->date('EkstraDato1');
            $table->date('EkstraDato2');
            $table->date('EkstraDato3');
            $table->date('EkstraDato4');
            $table->date('EkstraDato5');

            $table->time('EkstraKlokkeSlett1');
            $table->time('EkstraKlokkeSlett2');
            $table->time('EkstraKlokkeSlett3');
            $table->time('EkstraKlokkeSlett4');
            $table->time('EkstraKlokkeSlett5');

            $table->text('EkstraTekstFelt1');
            $table->text('EkstraTekstFelt2');
            $table->text('EkstraTekstFelt3');
            $table->text('EkstraTekstFelt4');
            $table->text('EkstraTekstFelt5');
            $table->text('EkstraTekstFelt6');
            $table->text('EkstraTekstFelt7');
            $table->text('EkstraTekstFelt8');
            $table->text('EkstraTekstFelt9');
            $table->text('EkstraTekstFelt10');

            $table->string('Dividendeklasse');
            $table->string('DiviKlasse');
            $table->string('DividendeProsent');
            $table->string('EtterUtlodningsDividendeklasse');
            $table->string('EtterUtlodningsDiviKlasse');
            $table->string('EtterUtlodningsDividendeProsent');

            $table->text('Formaal');
            $table->smallInteger('EnkeltmannsForetak');
            $table->string('PersonNavn');
            $table->string('FodselsNummer');
            $table->string('PersonAdresse');
            $table->string('PersonPostNr');
            $table->string('PersonPostSted');
            $table->string('PersonEpostAdresse');

            $table->date('EtterutlodningDatoReaapning');
            $table->date('EtterutlodningDatoForSalaerFastsettelse');
            $table->date('EtterutlodningFristDatoForBemerkninger');
            $table->date('EtterutlodningDatoForKjennelseSlutning');
            $table->date('EtterutlodningDatoForUtbetaling');
            $table->text('EtterUtlodningNotater');

            $table->date('OppsigelsesDato');
            $table->date('OppsigelsesFristFraDato');

            $table->date('StiftelsesDato');
            $table->date('RegistreringsDato');
            $table->string('Aksjekapital');
            $table->text('VedtektsfestetFormaal');
            $table->text('Gjeldsgrunnlag');
            $table->text('RegnskapsKommentarer');

            $table->string('KonkursdebitorsBankforbindelse');
            $table->string('Kemnerkontor');
            $table->string('KonkursdebitorsRevisorsOrgNr');
            $table->date('RegistreringsDatoMva');
            $table->string('KreditorUtvalgsEtat');
            $table->string('KonkursDebitorsKemnerKontor');
            $table->date('BegjaeringsdatoInnkommetTingretten');
            $table->date('BegjaeringsTidspunktInnkommetTingretten');

            $table->string('saksnummer')->unique();
            $table->string('debitor');

            //Utelei tabell
            //RegnskapsKontor tabell
            $table->integer('RegnskapsKontor_id')->unsigned();

            //RevisjonsKontor tabell
            $table->integer('RevisjonsKontor_id')->unsigned();

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
        Schema::dropIfExists('bo_info');
    }
}
