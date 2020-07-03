<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekvirent extends Model
{
    protected $table = 'rekvirenter';

    protected $fillable = [
        'Rekvirent',
        'KontaktPerson',
        'Adresse',
        'Postnr',
        'PostSted',
        'Epostadresse',
        'OrgNr'
    ];
}
