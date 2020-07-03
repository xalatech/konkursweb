<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekretaer extends Model
{
    protected $table = 'sekretaerer';

    protected $fillable = [
        'SekretaerSaksbehandler',
        'SekretaerensTittel',
        'SekretaerensEpostadresse',
        'SekretaerensInitialer'
    ];
}
