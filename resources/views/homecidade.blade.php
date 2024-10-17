@extends('layout')
@section('content')

<style>
    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        background-image: url('assets/foto.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: white;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    h1 {
        font-size: 3rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }
</style>

<h1>Cadastre sua Cidade</h1>

@endsection
