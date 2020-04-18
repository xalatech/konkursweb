<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Torzer\Awesome\Landlord\BelongsToTenants;

class LonnsData extends Model
{
    use BelongsToTenants;

    protected $table = 'lonns_data';
}
