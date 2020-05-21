<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Util\Proff;
use Facade\FlareClient\Http\Response;

class ProffController extends Controller
{
    protected $proff;

    public function __construct(Proff $proff)
    {
        $this->proff = $proff;
    }

    public function hent($org_nr)
    {
        $enhet = $this->proff->hent_enhet($org_nr);
        return response()->json($enhet, 200);
    }
}
