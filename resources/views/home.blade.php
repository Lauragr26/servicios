@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Servicios Api Precios</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table text-center">
                        <thead>
                          <tr>
                            <td colspan="4"><strong>Precios</strong></td>
                          </tr>
                          <tr>
                              <th>Fecha</th>
                              <th>Dolar</th>
                              <th>Euro</th>
                              <th>Dolar/Col</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                          <td>{{$precio['_timestamp']['fecha']}}</td>
                          <td>{{$precio['USD']['dolartoday']}}</td>
                          <td>{{$precio['EUR']['dolartoday']}}</td>
                          <td>{{$precio['USDCOL']['ratetrm']}}</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
