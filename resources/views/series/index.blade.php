@extends('layout')

@section('imagem')
<div class=" col-xl-7 col-lg-6 col-md-12 text-lg-end text-center">
<img src="{{ asset('assets/img/cachorro.png') }}"alt="" class="img-fluid"  >
</div>
@endsection

@section('cabecalho')
<div class="col-xl-5 col-lg-6 col-md-12">
  <div class="py-5 py-lg-0 text-white display-4 fw-bold">Lista de Séries
                       
     </div>
</div>
@endsection
@section('pesquisar')
<!-- <form class="form-inline" method="POST">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn border-secondary my-2 my-sm-0 mr-4" type="submit"><i class="fas fa-search"></i></button>
</form> -->
@endsection

@section('conteudo')

@include('mensagem', ['mensagem' => $mensagem])


@auth
<a href="{{ route('form_criar_serie') }}" class="btn btn-dark mb-3 mt-3 "><h5 class="text-white">Adicionar Nova Série</h5></a>

<ul class="list-group">
    @foreach($series as $serie)
    <li class="list-group-item d-flex justify-content-between align-items-center"style="font-size:large">
        <span id="nome-serie-{{ $serie->id }}" >{{ $serie->nome }}</span>

        <div class="input-group w-50" hidden id="input-nome-serie-{{ $serie->id }}">
            <input type="text" class="form-control" value="{{ $serie->nome }}">
            <div class="input-group-append">
                <button class="btn btn-primary" onclick="editarSerie({{ $serie->id }})">
                    <i class="fas fa-check"></i>
                </button>
                @csrf
            </div>
        </div>

        <span class="d-flex">
            
            <button  class="btn btn-info btn-sm mr-1" onclick="toggleInput({{ $serie->id }})">
                <i class="fas fa-edit"></i>
            </button>
           
            <a href="/series/{{ $serie->id }}/temporadas" class="btn btn-info btn-sm mr-1">
                <i class="fas fa-external-link-alt"></i>
            </a>
            
            <form method="post" action="/series/{{ $serie->id }}"
                  onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($serie->nome) }}?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">
                    <i class="far fa-trash-alt"></i>
                </button>
            </form>
           
        </span>
    </li>
    @endforeach
</ul>
@endauth

<script>
    function toggleInput(serieId) {
        const nomeSerieEl = document.getElementById(`nome-serie-${serieId}`);
        const inputSerieEl = document.getElementById(`input-nome-serie-${serieId}`);
        if (nomeSerieEl.hasAttribute('hidden')) {
            nomeSerieEl.removeAttribute('hidden');
            inputSerieEl.hidden = true;
        } else {
            inputSerieEl.removeAttribute('hidden');
            nomeSerieEl.hidden = true;
        }
    }

    function editarSerie(serieId) {
        let formData = new FormData();
        const nome = document
            .querySelector(`#input-nome-serie-${serieId} > input`)
            .value;
        const token = document
            .querySelector(`input[name="_token"]`)
            .value;
        formData.append('nome', nome);
        formData.append('_token', token);
        const url = `/series/${serieId}/editaNome`;
        fetch(url, {
            method: 'POST',
            body: formData
        }).then(() => {
            toggleInput(serieId);
            document.getElementById(`nome-serie-${serieId}`).textContent = nome;
        });
    }
</script>
@endsection