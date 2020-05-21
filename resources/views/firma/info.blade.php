@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Hent firma info</div>

                    <form action="{{ route('firma.store') }}" method="POST">
                        <div class="card-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group row">
                            <label for="organisasjonsnummer" class="col-md-2 col-form-label text-md-right">{{ __('Organisasjonsnummer') }}</label>

                            <div class="col-md-4">
                                <input id="organisasjonsnummer" type="text" class="form-control @error('organisasjonsnummer') is-invalid @enderror" name="organisasjonsnummer" value="{{ old('organisasjonsnummer') }}" required autocomplete="organisasjonsnummer" autofocus>

                                <button onclick="hentInfo('/proffapi/hent/')" class="btn btn-info mt-2">Hent Info</button>

                                @error('organisasjonsnummer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="firma-info"></div>
                        </div>



                    </div>


                    </form>

            </div>
        </div>
    </div>
</div>
@endsection
