<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use PhpParser\Builder\Function_;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class ListaRamaisController extends Controller
{
    public function listaramais()
    {

        $ramais = Usuarios::all();
        return view('ramais.listagem')->with('ramais', $ramais);

    }

    public function visualizar($id)
    {
        $retorno = Usuarios::find([$id]);

        if(empty($retorno))
        {
            return "Esse ramal não existe";
        }
        return view('ramais.detalhesramal')->with('r', $retorno[0]);
    }

    public function novo()
    {
        return view('ramais.novoramal');
    }

    public function adciona(Request $request)
    {
        $nome = $request->input('nome');
        $ramal = $request->input('ramal');
        $email = $request->input('email');

       DB::insert('INSERT INTO usuarios (nome, ramal, email) VALUES (?,?,?)', array($nome, $ramal, $email));

       return redirect('/ramais')->withInput($request->only($nome));

    }

    public function remover($id)
    {
        $retorno = Usuarios::find([$id])->first();

        if($retorno != null)
        {
            $retorno->delete();
            return redirect()->back();
        }

    }

}
