<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Torzer\Awesome\Landlord\BelongsToTenants;

class Kreditor extends Model
{
    use BelongsToTenants;

    protected $table = 'kreditorer';
}
