@extends('layout')

@section('cabecalho')
<div class="col-xl-5 col-lg-6 col-md-12">
                    <div class="py-5 py-lg-0 text-white display-4 fw-bold">Adicionar Série
                       
                    </div>
                </div>
@endsection

@section('imagem')
<div class=" col-xl-7 col-lg-6 col-md-12 text-lg-end text-center">
<img src="../../img/cachorro2.png"alt="" class="img-fluid"  >
</div>
@endsection

@section('conteudo')
@include('erros', ['errors' => $errors])

<form method="post">
    @csrf
    <div class="row">
        <div class="col col-8 mb-3 mt-3">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <div class="col col-2 mb-3 mt-3">
            <label for="qtd_temporadas">Nº temporadas</label>
            <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas">
        </div>

        <div class="col col-2 mb-3 mt-3">
            <label for="ep_por_temporada">Ep. por temporada</label>
            <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada">
        </div>
    </div>

    <button class="btn btn-primary mt-2"><h5 class="text-white">Adicionar</h5></button>
</form>
@endsection