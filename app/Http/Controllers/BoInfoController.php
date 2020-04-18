<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\BoInfo;
use Illuminate\Http\Request;

class BoInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boinfos = BoInfo::all();
        return view('konkursbo.list', compact('boinfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('konkursbo.create');
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
            'organisasjonsnummer' => 'required',
            'saksnummer' => 'required',
            'debitor' => 'required',
            'kommune_id' => 'required',
        ]);

        $boinfo = new BoInfo();
        $boinfo->organisasjonsnummer = $request->organisasjonsnummer;
        $boinfo->saksnummer = $request->saksnummer;
        $boinfo->debitor = $request->debitor;
        $boinfo->kommune_id = $request->kommune_id;

        $boinfo->save();

        return redirect('boinfo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BoInfo  $boInfo
     * @return \Illuminate\Http\Response
     */
    public function show(BoInfo $boInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BoInfo  $boInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(BoInfo $boInfo)
    {
        //
    }
}
