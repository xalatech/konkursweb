@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Advokat firmaer</div>

                <div class="card-body">
                    <table class="table table-stripped table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Organisasjonsnummer</th>
                            <th scope="col">Firma Navn</th>
                            <th scope="col">Epost</th>
                            <th scope="col">Konaktperson</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($firmaer as $firma)
                          <tr>
                            <td>{{ $firma->organisasjonsnummer }}</td>
                            <td>{{ $firma->navn }}</td>
                            <td>{{ $firma->epost }}</td>
                            <td>{{ $firma->kontaktperson }}</td>
                          </tr>
                          @endforeach


                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
