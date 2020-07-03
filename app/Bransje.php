<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bransje extends Model
{
    protected $table = 'Bransjer';

    protected $fillable = [
        'BransjeKode',
        'Bransje'
    ];
}
