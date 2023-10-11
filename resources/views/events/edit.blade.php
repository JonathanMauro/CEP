@extends('layouts.main')

@section('title', 'Editar')

@section('content')

<div class="container">
    <section class="row mt-5">
        <div class="col">
        <img src="{{asset('img\map.png')}}" alt="MapaLogo" width="100%">
       
    </div>
    <div class="col">
        <article class="card card-body">
            <h3>Preencha o endereço</h3>
            <form action="{{ route('atualizar', ['endereco_id' => $endereco->id]) }}" method="POST">
                @csrf
                <label for="cep">CEP</label>
                <input id="cep" type="text" name="cep" class="form-control mb-3" value="{{ old('cep', $endereco->cep) }}">

                <label for="logradouro">Logradouro</label>
                <input id="logradouro" type="text" name="logradouro" class="form-control mb-3" value="{{$endereco->logradouro}}">

                <label for="numero">Número</label>
                <input id="numero" type="text" name="numero" class="form-control mb-3" value="{{$endereco->numero}}">

                <label for="complemento">Complemento</label>
                <input id="complemento" type="text" name="complemento" class="form-control mb-3" value="{{$endereco->complemento}}">

                <label for="bairro">Bairro</label>
                <input id="bairro" type="text" name="bairro" class="form-control mb-3" value="{{$endereco->bairro}}">

                <label for="cidade">Cidade</label>
                <input id="cidade" type="text" name="cidade" class="form-control mb-3" value="{{$endereco->cidade}}">

                <label for="uf">UF</label>
                <input id="uf" type="text" name="uf" class="form-control mb-3" value="{{$endereco->uf}}">

                <div class="button-container">
                    <button type="submit" class="btn btn-success" name="action" value="salvar">Salvar</button>
                    <button type="reset" class="btn btn-danger">Limpar</button> 
                </div>
            </form>
        </article>
    </div>
</section>
</div>


@endsection