<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class AdvokatFirma extends Model
{
    protected $table = 'advokat_firmaer';

    protected $fillable = [
        'organisasjonsnummer', 'navn', 'adresse', 'postnummer', 'poststed', 'epost', 'bankkonto', 'banknavn', 'kontaktperson', 'fakturamottaker', 'pris'
    ];

    public function brukere()
    {
        $this->hasMany(User::class);
    }
}
