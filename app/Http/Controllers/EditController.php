<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EditController extends Controller
{


    public function edit($endereco_id)
    {
        $endereco = User::find($endereco_id);

        return view('events.edit', ['endereco' => $endereco]);
    }

    public function insertSearch(Request $request)
    {
        $user = new User;
        $user->cep =  $request->cep;
        $user->logradouro = $request->logradouro;
        $user->numero = $request->numero;
        $user->complemento = $request->complemento;
        $user->bairro = $request->bairro;
        $user->cidade = $request->cidade;
        $user->uf = $request->uf;

        $user->save();

        return redirect('/')->with('msg', 'Endereço salvo com sucesso!');
    }

    public function atualizar(Request $request, $endereco_id)
    {
        // Encontre o endereço a ser atualizado
        $endereco = User::find($endereco_id);
    
        if (!$endereco) {
            // Lidar com o caso em que o endereço não foi encontrado
            return redirect()->back()->with('error', 'Endereço não encontrado.');
        }
    
        // Inicialize as variáveis para todos os campos que podem ser alterados
        $cep = $request->input('cep');
        $logradouro = $request->input('logradouro');
        $numero = $request->input('numero');
        $complemento = $request->input('complemento');
        $bairro = $request->input('bairro');
        $cidade = $request->input('cidade');
        $uf = $request->input('uf');
    
        // Verifique se algum campo foi alterado
        $camposAlterados = false;
    
        if ($cep !== $endereco->cep) {
            $endereco->cep = $cep;
        } else {
            $cep = $endereco->cep;
        }
    
        if ($logradouro !== $endereco->logradouro) {
            $endereco->logradouro = $logradouro;
            $camposAlterados = true;
        }
    
        if ($numero !== $endereco->numero) {
            $endereco->numero = $numero;
            $camposAlterados = true;
        }
    
        if ($complemento !== $endereco->complemento) {
            $endereco->complemento = $complemento;
            $camposAlterados = true;
        }
    
        if ($bairro !== $endereco->bairro) {
            $endereco->bairro = $bairro;
            $camposAlterados = true;
        }
    
        if ($cidade !== $endereco->cidade) {
            $endereco->cidade = $cidade;
            $camposAlterados = true;
        }
    
        if ($uf !== $endereco->uf) {
            $endereco->uf = $uf;
            $camposAlterados = true;
        }
    
        // Verifique se algum campo foi alterado antes de salvar
        if ($camposAlterados) {
            $endereco->save();
            return redirect()->route('editar', ['endereco_id' => $endereco_id])->with('success', 'Endereço atualizado com sucesso.');
        } else {
            return redirect()->route('editar', ['endereco_id' => $endereco_id])->with('erro', 'Nenhum campo foi alterado.');
        }
    }
    
}
