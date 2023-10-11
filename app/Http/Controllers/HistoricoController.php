<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    public function historico() {
        $enderecos = User::orderBy('id')
                        ->get(); // Isso busca todos os registros da tabela de usuários e os ordena por 'id'
        
        return view('events.favorito', ['enderecos' => $enderecos]);
    }
    


}
