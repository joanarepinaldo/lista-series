@extends('layout')

@section('cabecalho')
<div class=" col-md-12">
  <div class="md-30 py-5 py-lg-10 text-white display-4 fw-bold">Temporadas de {{ $serie->nome }}
                       
     </div>
</div>
    
@endsection


@section('conteudo')
@auth
    <ul class="list-group">
        @foreach($temporadas as $temporada)
        <li class="mt-2 list-group-item d-flex justify-content-between align-items-center"style="font-size:large">
        <a href="/temporadas/{{ $temporada->id }}/episodio">
                Temporada {{ $temporada->numero }}
            </a>
            
        
            
            
            <span class="ml-2 badge badge-secondary d-flex align-items-center">
                {{ $temporada->getEpisodiosAssistidos()->count() }} / {{ $temporada->episodios->count() }}
            </span>
        
        
        </li>
        @endforeach
    </ul>
    @endauth
@endsection