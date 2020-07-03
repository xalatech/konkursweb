<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoRegnskapsKontor extends Model
{
    protected $table = 'bo_regnskaps_kontorer';

    public function boinfo()
    {
        return $this->belongsToMany(BoInfo::class, 'boinfo', 'bo_id', 'id');
    }

    public function regnskapskontorer()
    {
        return $this->belongsToMany(RegnskapsKontor::class, 'regnskaps_kontor', 'regnskaps_kontor_id', 'id');
    }
}
