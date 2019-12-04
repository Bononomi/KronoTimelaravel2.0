<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CronometragemController extends Controller {

    public function index() {
        return view('cronometro.index');
    }
    
    public function getTomadaTempo() {
        $codigoTomadaTempo = $_GET ['codCro'];
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
                where('OpeCod', '=', $codigoOperacao)
                ->get();
        
        return $elementos;
    }
    
    public function guardar(Request $request) {
        
        $cronometragem = new \App\Cronometragem();
        
        //Número da leitura
        $cronometragem->codCro = $request->get('codCro');
        
        //Código da tomada de tempo
        $cronometragem->codTom = $request->get('codTom');
        
        //Código do elemento
        $cronometragem->codEle = $request->get('codEle');
        
        //Tempo - normalização de dados
        $tempo = $request->get('tempo');
        $tempo = str_replace(' ', '', $tempo);
        $cronometragem->CroTem = $tempo;
        
        //Salva a cronometragem
        $cronometragem->save();
        
        return true;
    }

}
