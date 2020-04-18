<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Torzer\Awesome\Landlord\BelongsToTenants;

class Fordringer extends Model
{
    use BelongsToTenants;

    protected $table = 'fordringer';
}
