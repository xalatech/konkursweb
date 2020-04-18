@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Opprett Advokatfirma</div>

                    <form action="{{ route('firma.store') }}" method="POST">
                        <div class="card-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group row">
                            <label for="organisasjonsnummer" class="col-md-2 col-form-label text-md-right">{{ __('Organisasjonsnummer') }}</label>

                            <div class="col-md-4">
                                <input id="organisasjonsnummer" type="text" class="form-control @error('organisasjonsnummer') is-invalid @enderror" name="organisasjonsnummer" value="{{ old('organisasjonsnummer') }}" required autocomplete="organisasjonsnummer" autofocus>

                                <button onclick="hentOpplysninger('/brregapi/hent/')" class="btn btn-info mt-2">Hent opplysning</button>

                                @error('organisasjonsnummer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="navn" class="col-md-2 col-form-label text-md-right">{{ __('Firma navn') }}</label>

                            <div class="col-md-6">
                                <input id="navn"  type="text" class="form-control @error('navn') is-invalid @enderror" name="navn" value="{{ old('navn') }}" required autocomplete="navn">

                                @error('navn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adresse"  class="col-md-2 col-form-label text-md-right">{{ __('Adresse') }}</label>

                            <div class="col-md-6">
                                <textarea id="adresse"  value="{{ old('adresse') }}" class="form-control @error('adresse') is-invalid @enderror" name="adresse" required autocomplete="adresse">
                                </textarea>

                                @error('adresse')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="postnummer" class="col-md-2 col-form-label text-md-right">{{ __('Postnummer') }}</label>

                            <div class="col-md-2">
                                <input id="postnummer"  type="text" class="form-control @error('postnummer') is-invalid @enderror" name="postnummer" value="{{ old('postnummer') }}" required autocomplete="postnummer">

                                @error('postnummer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="poststed" class="col-md-2 col-form-label text-md-right">{{ __('Poststed') }}</label>

                            <div class="col-md-2">
                                <input  id="poststed" type="text" class="form-control @error('poststed') is-invalid @enderror" name="poststed" value="{{ old('poststed') }}" required autocomplete="poststed">

                                @error('poststed')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="epost" class="col-md-2 col-form-label text-md-right">{{ __('Epost') }}</label>

                            <div class="col-md-4">
                                <input id="epost" type="text" class="form-control @error('epost') is-invalid @enderror" name="epost" value="{{ old('epost') }}" required autocomplete="epost">

                                @error('epost')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="banknavn" class="col-md-2 col-form-label text-md-right">{{ __('Banknavn') }}</label>

                            <div class="col-md-4">
                                <input id="banknavn" type="text" class="form-control @error('banknavn') is-invalid @enderror" name="banknavn" value="{{ old('banknavn') }}" required autocomplete="banknavn">

                                @error('banknavn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bankkonto" class="col-md-2 col-form-label text-md-right">{{ __('Bankkonto nr') }}</label>

                            <div class="col-md-4">
                                <input id="bankkonto" type="text" class="form-control @error('bankkonto') is-invalid @enderror" name="bankkonto" value="{{ old('bankkonto') }}" required autocomplete="bankkonto">

                                @error('bankkonto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kontaktperson" class="col-md-2 col-form-label text-md-right">{{ __('Kontaktperson') }}</label>

                            <div class="col-md-4">
                                <input id="kontaktperson" type="text" class="form-control @error('kontaktperson') is-invalid @enderror" name="kontaktperson" value="{{ old('kontaktperson') }}" required autocomplete="kontakt_person">

                                @error('kontaktperson')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fakturamottaker" class="col-md-2 col-form-label text-md-right">{{ __('Fakturamottaker') }}</label>

                            <div class="col-md-6">
                                <input id="fakturamottaker" type="text" class="form-control @error('fakturamottaker') is-invalid @enderror" name="fakturamottaker" value="{{ old('fakturamottaker') }}" required autocomplete="fakturamottaker">

                                @error('fakturamottaker')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pris" class="col-md-2 col-form-label text-md-right">{{ __('Pris per bo') }}</label>

                            <div class="col-md-2">
                                <input id="pris" type="number" class="form-control @error('pris') is-invalid @enderror" name="pris" value="{{ old('pris') }}" required autocomplete="pris">

                                @error('pris')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                    </div>

                    <div class="card-footer">
                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrer firma') }}
                                </button>
                                <a href="{{ route('firma.index') }}" class="btn btn-secondary">
                                    {{ __('Avbryt') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    </form>

            </div>
        </div>
    </div>
</div>
@endsection
