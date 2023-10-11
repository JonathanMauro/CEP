@extends('layouts.main')

@section('title', 'Consulta CEP')

@section('content')



    <div class="container">
        <section class="row mt-5">
            <div class="col">
                <img src="{{ asset('img\undraw_tourist_map_re_293e.png') }}" alt="MapaLogo" width="100%">

            </div>
            <div class="col">
                <article class="card card-body">
                    <h3>Preencha o endereço</h3>
                    <form action="{{ route('insertSearch') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="cep">CEP</label>
                        <input id="cep" type="text" name="cep" class="form-control mb-3"
                            placeholder="Ex: 12345678">

                        <label for="logradouro">Logradouro</label>
                        <input id="logradouro" type="text" name="logradouro" class="form-control mb-3"
                            placeholder="Ex: Rua X, Travessa Y, Av Z">

                        <label for="numero">Número</label>
                        <input id="numero" type="text" name="numero" class="form-control mb-3" placeholder="Ex: 123">

                        <label for="complemento">Complemento</label>
                        <input id="complemento" type="text" name="complemento" class="form-control mb-3"
                            placeholder="Ex: apto 1 Bl 2">

                        <label for="bairro">Bairro</label>
                        <input id="bairro" type="text" name="bairro" class="form-control mb-3"
                            placeholder="Ex: Centro">

                        <label for="cidade">Cidade</label>
                        <input id="cidade" type="text" name="cidade" class="form-control mb-3"
                            placeholder="Ex: Juiz de Fora">

                        <label for="uf">UF</label>
                        <input id="uf" type="text" name="uf" class="form-control mb-3" placeholder="Ex: MG">

                        <div class="button-container">
                            <button type="submit" class="btn btn-success" name="action" value="salvar">Salvar</button>
                            <button type="reset" class="btn btn-danger">Cancelar</button>
                        </div>
                    </form>
                </article>
            </div>
        </section>
    </div>

@endsection
