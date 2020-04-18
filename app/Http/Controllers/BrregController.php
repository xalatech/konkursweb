<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Util\Brreg;
use Facade\FlareClient\Http\Response;

class BrregController extends Controller
{
    protected $brreg;

    public function __construct(Brreg $brreg)
    {
        $this->brreg = $brreg;
    }

    public function hent($org_nr)
    {
        $enhet = $this->brreg->hent_enhet($org_nr);
        return response()->json($enhet, 200);
    }
}
