@extends('layouts.app')

@section('title') Casa Medio Camino | Donaciones @endsection

@section('content')
    <div class="container margin-login">
        <div class="card">
            <div class="card-header">
                Donacion con Paypal
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <form action="{{route('donation.pay')}}" method="post" id="paymentForm">
                    @csrf
                    <div class="row">
                        <div class="col-auto">
                            <label>Cuanto deseas donar?</label>
                            <input
                                type="number"
                                name="value"
                                min="1"
                                step="0.01"
                                class="form-control"
                                value="10.00"
                                required
                            />
                            <small class="form-text text-muted">Utilice valores con decimales separados por puntos "."</small>
                        </div>
                        <div class="col-auto">
                            <label>Moneda</label>
                            <select class="custom-select" name="currency" required>
                                @foreach($currencies as $currency)
                                    <option value="{{$currency->iso}}" @if(($currency->iso) === 'mxn') selected @endif>{{strtoupper($currency->iso)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <input type="hidden" value="1" name="payment_plataform"> <!--Aqui se pone estatico el valor ID de la plataforma paypal, en caso de tener mas, se sustituye por un valor dinamico-->
                    <div class="text-left mt-3">
                        <button type="submit" id="payButton" class="btn btn-primary btn-lg">Donar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
