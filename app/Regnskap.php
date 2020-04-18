<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Torzer\Awesome\Landlord\BelongsToTenants;

class Regnskap extends Model
{
    use BelongsToTenants;

    protected $table = 'regnskapp';
}
