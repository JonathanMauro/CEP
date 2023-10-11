@extends('layouts.main')

@section('title', 'Consulta CEP')

@section('content')

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>CEP</th>
                    <th>LOGRADOURO</th>
                    <th>NUMERO</th>
                    <th>COMPLEMENTO</th>
                    <th>BAIRRO</th>
                    <th>CIDADE</th>
                    <th>UF</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($enderecos as $endereco)
                    <tr>
                        <td>{{ $endereco->cep }}</td>
                        <td>{{ $endereco->logradouro }}</td>
                        <td>{{ $endereco->numero }}</td>
                        <td>{{ $endereco->complemento }}</td>
                        <td>{{ $endereco->bairro }}</td>
                        <td>{{ $endereco->cidade }}</td>
                        <td>{{ $endereco->uf }}</td>
                        <td>
                            <form action="{{ route('atualizarFavorito', ['endereco_id' => $endereco->id]) }}" method="POST">
                                @csrf 
                                @method('POST')  
                                <button type="submit" class="custom-button {{ $endereco->favorito ? 'starYellowButton' : 'starButton' }}">
                                    <ion-icon name="star-outline"></ion-icon>
                                </button>
                            </form>
                        </td>
                                                              
                        <td><a href="{{ route('editar', ['endereco_id' => $endereco->id]) }}" class="editButton"><ion-icon name="create-outline"></ion-icon></a></td>
                        <td><a href="{{ route('deleteUsuario', ['endereco_id' => $endereco->id]) }}" class="deleteButton"><ion-icon name="trash-outline"></ion-icon></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



@endsection
