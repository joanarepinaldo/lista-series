<?php

namespace App\Http\Controllers;

use App\Serie;
use App\Services\RemovedorDeSerie;
use Illuminate\Http\Request;

class TemporadasController extends Controller
{
    public function index(int $serieId)
    {
        $serie = Serie::find($serieId);
        $temporadas = $serie->temporadas;

        return view(
            'temporadas.index', 
            compact('serie', 'temporadas')
        );
    }


    public function destroyT(Request $request, RemovedorDeSerie $removedorDeSerie)
    {
        
        print_r($request->only('id'));
        
    
        
    }
    
}


