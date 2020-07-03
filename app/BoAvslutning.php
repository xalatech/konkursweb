<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoAvslutning extends Model
{
    protected $table = 'boavslutninger';

    protected $fillable = [
        'TypeBoavslutning'
    ];
}
