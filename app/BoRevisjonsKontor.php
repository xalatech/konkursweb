<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoRevisjonsKontor extends Model
{
    protected $table = 'bo_revisjons_kontorer';

    public function boinfo()
    {
        return $this->belongsToMany(BoInfo::class, 'boinfo', 'bo_id', 'id');
    }

    public function revisjonskontorer()
    {
        return $this->belongsToMany(RevisjonsKontor::class, 'revisjons_kontor', 'revisjons_kontor_id', 'id');
    }
}
