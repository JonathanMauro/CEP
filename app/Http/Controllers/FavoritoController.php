<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FavoritoController extends Controller
{


    public function showFavorites(){
        $enderecos = User::where('favorito', true)
        ->orderBy('id')
        ->get(); // Busca os registros onde a coluna 'favorito' é verdadeira
        
        return view('events.favorito', ['enderecos' => $enderecos]);
    
    }
    

    public function atualizarFavorito($endereco_id) {
        $endereco = User::find($endereco_id);
    
        if ($endereco) {
            $endereco->favorito = !$endereco->favorito;
            $endereco->save();
            return redirect()->back()->with('msg', 'Favorito atualizado!');
        } else {
            // O registro não foi encontrado, você pode lidar com isso de acordo com suas necessidades
            return redirect()->back()->with('error', 'Endereço não encontrado.');
        }
    }
    

    

}
