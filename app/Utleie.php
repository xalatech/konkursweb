<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utleie extends Model
{
    protected $table = 'utleie';

    protected $fillable = [
        'ForetaksNavn',
        'ForetaksType',
        'Adresse',
        'Postnr',
        'PostSted',
        'Epostadresse',
        'OrgNr',
        'UtlStiftelsesDato'
    ];
}
