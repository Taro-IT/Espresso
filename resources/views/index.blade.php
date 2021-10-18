@extends('layouts.app')


@section('content')

    <ul>
        <li><a href="{{ url('/bot_test') }}">Test de bot</a></li>
        <li><a href="{{ url('/facebook_test') }}">Test de facebook</a></li>
        <li><a href="{{ url('/medium_test') }}">Test de Medium</a></li>
        <li><a href="{{ url('/paypal_test') }}">Test de PayPal</a></li>
    </ul>

@endsection
