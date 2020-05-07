<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\TranslationLoader\LanguageLine;

class Language extends LanguageLine
{
    protected $table = 'language_lines';

    protected $fillable = [
        'group', 'key'
    ];
}
