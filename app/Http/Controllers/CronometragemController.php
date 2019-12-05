<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CronometragemController extends Controller {

    public function index() {
        return view('cronometro.index');
    }
    
    public function getTomadaTempo() {
        $codigoTomadaTempo = $_GET ['cod'];
        $tomada = \App\TomadaTempo::
                where('codTom', '=', $codigoTomadaTempo)
                ->get();
        
        if (isset($tomada[0])) {
            return $tomada[0];
        } else {
            return array();
        }
        
    }
    
    public function getElementos() {
        $codigoOperacao = $_GET ['cod'];
        
        $elementos = \App\Elemento::
                where('codTom', '=', $codigoOperacao)
                ->get();
        
        return $elementos;
    }
    
    public function guardar() {
        
        $cronometragem = new \App\Cronometragem();
        
        //Número da leitura
        $cronometragem->codCro = $_GET ['codCro'];
        
        //Código da tomada de tempo
        $cronometragem->codTom = $_GET ['codTom'];
        
        //Código do elemento
        $cronometragem->codEle = $_GET ['codEle'];
        
        //Tempo - normalização de dados
        $tempo = $_GET ['tempo'];
        $tempo = str_replace(' ', '', $tempo);
        $cronometragem->tempo = $tempo;
        
        //Salva a cronometragem
        $cronometragem->save();
        
        return true;
    }

}
