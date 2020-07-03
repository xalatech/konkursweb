<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utleier extends Model
{
    protected $table = 'utleier';

    protected $fillable = [
        'Navn',
        'Adresse',
        'Postnr',
        'PostSted',
        'Epostadresse',
        'OrgNr',
        'Telefon'
    ];
}
