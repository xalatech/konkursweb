@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Opprett Boinfo</div>

                <div class="card-body">
                    <form action="{{ route('uploadXML') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group row">
                            <label for="laste" class="col-md-4 col-form-label text-md-right">{{ __('Laste opp XML fil') }}</label>

                            <div class="col-md-6">
                                <input id="xmlfil" name="xmlfil" type="file" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Last opp fil') }}
                                </button>
                            </div>
                        </div>

                    </form>

                    <form action="{{ route('boinfo.store') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">


                        <div class="form-group row">
                            <label for="organisasjonsnummer" class="col-md-4 col-form-label text-md-right">{{ __('Debitor Organisasjonsnummer') }}</label>

                            <div class="col-md-6">
                                <input id="organisasjonsnummer" disabled type="text" class="form-control @error('organisasjonsnummer') is-invalid @enderror" name="organisasjonsnummer" value="{{ old('organisasjonsnummer') }}" required autocomplete="organisasjonsnummer" autofocus>

                                {{-- <button onclick="hentOpplysninger('/brregapi/hent/')" class="btn btn-info mt-2">Hent opplysning</button> --}}

                                @error('organisasjonsnummer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="debitor" class="col-md-4 col-form-label text-md-right">{{ __('Debitor navn') }}</label>

                            <div class="col-md-6">
                                <input id="navn" disabled type="text" class="form-control @error('debitor') is-invalid @enderror" name="debitor" value="{{ old('debitor') }}" required autocomplete="debitor">

                                @error('debitor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="saksnummer" class="col-md-4 col-form-label text-md-right">{{ __('Offentlig saksnr') }}</label>

                            <div class="col-md-6">
                                <input id="saksnummer" disabled type="text" class="form-control @error('saksnummer') is-invalid @enderror" name="saksnummer" value="{{ old('saksnummer') }}" required autocomplete="saksnummer">

                                @error('saksnummer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kommune_id" class="col-md-4 col-form-label text-md-right">{{ __('Kommune') }}</label>

                            <div class="col-md-6">
                                <input id="kommune_id" disabled type="text" class="form-control @error('kommune_id') is-invalid @enderror" name="kommune_id" value="{{ old('kommune_id') }}" required autocomplete="kommune_id">

                                @error('kommune_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
