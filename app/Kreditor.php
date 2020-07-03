<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kreditor extends Model
{
    protected $table = 'kreditorer';

    protected $fillable = [
        'Kreditor',
        'Adresse',
        'PostNr',
        'PostSted',
        'EpostAdresse',
        'BankNavn',
        'BankKonto',
        'SwiftKode',
        'KontaktPerson',
        'OnskerFordringsBekreftelse',
        'OnskerEposter'
    ];
}
