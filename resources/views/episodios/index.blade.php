@extends('layout')

@section('cabecalho')
<div class=" col-md-12">
  <div class="md-30 py-5 py-lg-10 text-white display-4 fw-bold">Episódios de {{ $serie->nome }} - Temporada {{ $temporada->numero }}
                       
     </div>
</div>
    
@endsection

@section('conteudo')
    @include('mensagem', ['mensagem' => $mensagem])
    @auth
    <form action="/temporadas/{{ $temporadaId }}/episodio/assistir" method="post">
        @csrf
        <ul class="list-group">
            @foreach($episodios as $episodio)
            <li class="mt-2 list-group-item d-flex justify-content-between align-items-center"style="font-size:large">
                Episódio {{ $episodio->numero }}
                <input type="checkbox"
                       name="episodio[{{ $episodio->id }}][assistido]"
                       {{ $episodio->assistido ? 'checked' : '' }}>
            </li>
            @endforeach
        </ul>

        <button class="btn btn-primary mt-2"><h5 class="text-white">Salvar</h5></button>
    </form>
    @endauth
@endsection