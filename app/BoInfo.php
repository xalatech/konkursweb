<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Torzer\Awesome\Landlord\BelongsToTenants;

class BoInfo extends Model
{
    use BelongsToTenants;

    protected $table = 'bo_infoer';

    protected $fillable = [
        'organisasjonsnummer', 'saksnummer', 'debitor', 'firma_id', 'kommune_id'
    ];
}
