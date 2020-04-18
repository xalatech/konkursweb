@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Boinfo</div>

                <div class="card-body">
                    <table class="table table-stripped table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Orgnr</th>
                            <th scope="col">Debitor</th>
                            <th scope="col">Saksnr</th>
                            <th scope="col">Kommune</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($boinfos as $boinfo)
                          <tr>
                            <td>{{ $boinfo->organisasjonsnummer }}</td>
                            <td>{{ $boinfo->debitor }}</td>
                            <td>{{ $boinfo->saksnummer }}</td>
                            <td>{{ $boinfo->kommune_id }}</td>
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
