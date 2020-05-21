<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProffController extends Controller
{
    protected $proff;
    public $baseURI;
    public $token;

    public function __construct()
    {
        $this->token = env('PROFF_TOKEN');
        $this->baseURI = env('PROFF_BASE_URL');
    }

    public function hent($org_nr)
    {
        $response = Http::withToken($this->token)->get($this->baseURI . '/' . $org_nr);
        return response()->json($response, 200);
    }
}
