<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cidade;
use Illuminate\Support\Facades\Redirect;

class CidadeController extends Controller
{
    public function MostrarHome()
    {
        return view('homecidade');
    }

    public function MostrarCadastroCidade()
    {
        return view('cadastrocidade');
    }

    public function CadastrarCidade(Request $request)
    {
        $registros = $request->validate([
            'nomeCidade' => 'string|required',
            'numeroPopulacao' => 'integer|required',
            'siglaCidade' => 'string|required',
            'nomeVereador' => 'string|required'
        ]);

        Cidade::create($registros);
        return Redirect::route('home-cidade');
    }


    public function Destroy(cidade $id)
    {
        $id->delete();
        return Redirect::route('home-cidade');
    }
    public function Update(Cidade $id, Request $request)
    {
        $registros = $request->validate([
            'nomeCidade' => 'string|required',
            'numeroPopulacao' => 'integer|required',
            'siglaCidade' => 'string|required',
            'nomeVereador' => 'string|required'
        ]);
        
        $id->fill($registros);
        $id->save();

        return Redirect::route('home-cidade');
    }
    public function MostrarCidadeCodigo(cidade $id)
    {
        return view("alteracidade", ['registrosCidade' => $id]);
    }

    public function MostrarCidadeNome(Request $request)
    {
        $registros = cidade::query();
        $registros->when($request->nomeCidade, function ($query, $valor) {
            $query->where('nomeCidade', 'like', '%' . $valor . '%');
        });
        $todosRegistros = $registros->get();
        return view('listacidade', ['registrosCidade' => $todosRegistros]);
    }
}
