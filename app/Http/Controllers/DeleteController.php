<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DeleteController extends Controller
{
    public function deletar($endereco_id){
      
        $endereco = User::find($endereco_id);

        if($endereco){

            $endereco->delete();
            return redirect()->back()->with('msg', 'Endereço Deletado!');
        } else {
            return redirect()->back()->with('error', 'Endereço não encontrado! Não foi possível deletar o mesmo.');
        }
    }
}
