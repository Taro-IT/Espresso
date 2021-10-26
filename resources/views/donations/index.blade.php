@extends('layouts.app')

@section('title') Casa Medio Camino | Donaciones @endsection

@section('content')
    <div class="container margin-login">
        <div class="card">
            <div class="card-header">
                Donacion con Paypal
            </div>
            <div class="card-body">
                <form action="" method="post" id="paymentForm">
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
                            />
                            <small class="form-text text-muted">Utilice valores con decimales separados por puntos "."</small>
                        </div>
                    </div>
                    <div class="text-left mt-3">
                        <button type="submit" id="payButton" class="btn btn-primary btn-lg">Donar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
