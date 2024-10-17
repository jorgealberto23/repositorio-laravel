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
        margin-bottom: 0.5rem;
        margin-top: 8px
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
        gap:10px;
        margin-top:10px
    }

    .btn-primary:hover {
        background-color: #0056b3; 
    }
</style>

<div class="container mt-5">
    <h2>Alterar Cidade</h2>
    <form method="post" action="{{ route('altera-cidade', $registrosCidade->idCidade) }}">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="nomeCidade">Nome da Cidade</label>
            <input type="text" class="form-control" id="nomeCidade" name="nomeCidade" value="{{ $registrosCidade->nomeCidade }}" placeholder="Digite o nome da cidade" required>
        </div>

        <div class="form-group">
            <label for="numeroPopulacao">Número de População</label>
            <input type="number" class="form-control" id="numeroPopulacao" name="numeroPopulacao" value="{{ $registrosCidade->numeroPopulacao }}" placeholder="Digite o número da população" required>
        </div>

        <div class="form-group">
            <label for="siglaCidade">Sigla da Cidade</label>
            <input type="text" class="form-control" id="siglaCidade" name="siglaCidade" value="{{ $registrosCidade->siglaCidade }}" placeholder="Digite a sigla da cidade" required>
        </div>

        <div class="form-group">
            <label for="nomeVereador">Nome do Vereador</label>
            <input type="text" class="form-control" id="nomeVereador" name="nomeVereador" value="{{ $registrosCidade->nomeVereador }}" placeholder="Digite o nome do vereador" required>
        </div>

        <button type="submit" class="btn btn-primary">Alterar</button>
    </form>
</div>

@endsection
