<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revisor extends Model
{
    protected $table = 'revisorer';

    protected $fillable = [
        'Borevisor',
        'FirmaNavn',
        'Adresse',
        'Postnr',
        'PostSted',
        'Epostadresse',
        'OrgNr'
    ];
}
