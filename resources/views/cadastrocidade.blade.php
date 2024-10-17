@extends('layout')
@section('content')

<style>
    .container {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 2rem;
        width: 800px;
    }

    h2 {
        color: #007bff;
        margin-bottom: 1.5rem;
    }

    .form-group label {
        font-weight: bold;
        color: #343a40;

    }

    .form-control {
        border-radius: 5px;
        border: 1px solid #ced4da;
        transition: border-color 0.3s;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s;
        margin-top: 10px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
    label{
        padding : 5px;
        margin-top: 17px;
    }
</style>

<div class="container mt-5">
    <h2>Cadastro de Cidades</h2>
    <form method="post" action="{{ route('cadastra-cidade') }}">
        @csrf
        <div class="form-group">
            <label for="nomeCidade">Nome da Cidade</label>
            <input type="text" class="form-control" id="nomeCidade" name="nomeCidade" placeholder="Digite o nome da cidade" required>
        </div>
        <div class="form-group">
            <label for="numeroPopulacao">Número de População</label>
            <input type="number" class="form-control" id="numeroPopulacao" name="numeroPopulacao" placeholder="Digite o número de população" required>
        </div>
        <div class="form-group">
            <label for="siglaCidade">Sigla da Cidade</label>
            <input type="text" class="form-control" id="siglaCidade" name="siglaCidade" placeholder="Digite a sigla da cidade" required>
        </div>
        <div class="form-group">
            <label for="nomeVereador">Nome do Vereador</label>
            <input type="text" class="form-control" id="nomeVereador" name="nomeVereador" placeholder="Digite o nome do vereador" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Cidade</button>
    </form>
</div>

@endsection
