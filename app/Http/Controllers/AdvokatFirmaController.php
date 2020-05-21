<?php

namespace App\Http\Controllers;

use App\AdvokatFirma;
use App\Notifications\FirmaRegistration;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdvokatFirmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $firmaer = AdvokatFirma::all();
        return view('firma.list', compact('firmaer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('firma.create');
    }

    public function info()
    {
        return view('firma.info');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'navn' => 'required|unique:advokat_firmaer|max:255',
            'epost' => 'required|unique:advokat_firmaer|max:255',
            'adresse' => 'required',
            'postnummer' => 'required',
            'poststed' => 'required',
            'organisasjonsnummer' => 'required|unique:advokat_firmaer|max:255',
        ]);

        $firma = new AdvokatFirma();
        $firma->navn = $request->navn;
        $firma->epost = $request->epost;
        $firma->adresse = $request->adresse;
        $firma->postnummer = $request->postnummer;
        $firma->poststed = $request->poststed;
        $firma->organisasjonsnummer = $request->organisasjonsnummer;
        $firma->banknavn = $request->banknavn;
        $firma->bankkonto = $request->bankkonto;
        $firma->kontaktperson = $request->kontaktperson;
        $firma->fakturamottaker = $request->fakturamottaker;
        $firma->pris = $request->pris;
        $firma->save();

        $hashed_random_password = User::generatePassword();
        $user = User::create([
            'name' => $request->kontaktperson,
            'firma_id' => $firma->id,
            'email' => $request->epost,
            'password' => $hashed_random_password
        ]);

        User::sendWelcomeEmail($user);

        return redirect('firma');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdvokatFirma  $advokatFirma
     * @return \Illuminate\Http\Response
     */
    public function show(AdvokatFirma $advokatFirma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdvokatFirma  $advokatFirma
     * @return \Illuminate\Http\Response
     */
    public function edit(AdvokatFirma $advokatFirma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdvokatFirma  $advokatFirma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdvokatFirma $advokatFirma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdvokatFirma  $advokatFirma
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdvokatFirma $advokatFirma)
    {
        //
    }
}
