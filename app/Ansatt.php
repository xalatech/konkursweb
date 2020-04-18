<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Torzer\Awesome\Landlord\BelongsToTenants;

class Ansatt extends Model
{
    use BelongsToTenants;

    protected $table = 'ansatter';
}
