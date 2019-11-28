<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElementoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {    
         //$elementos = \App\Elemento::get();
        // $operacao = \App\Operacao::get();
        //$elementos = \App\Elemento::where('codop', '=', $_GET ['codop'])->get(); //BOTAR ESSE CODIGO DE VOLTA DPS!!!
        $elementos = \App\Elemento::join('operacao', 'elemento.codOp', '=', 'operacao.codOp')->where('elemento.codop', '=', $_GET ['codop'])->get(); //BOTAR ESSE CODIGO DE VOLTA DPS!!!
        //$p->nomeOpfind($_GET ['codOp'])
        // return view('elemento.index', compact('elementos', 'operacao'));
        return view('elemento.index', compact('elementos')); //BOTAR ESSE CODIGO DE VOLTA DPS!!!
        //return view('elemento.index', compact('elementos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('elemento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $elemento = new \App\Elemento();
        //$elemento->nomeOp = $request->get('nomeOp');
        $elemento->nomeEle = $request->get('nomeEle');
        $elemento->codOp = $request->get('codOp');
        $elemento->ritmo = $request->get('ritmo');
        $elemento->interferencia = $request->get('interferencia');
        $elemento->concessao = $request->get('concessao');
        $elemento->qntVezes = $request->get('qntVezes');
        $elemento->porPeca = $request->get('porPeca');
        $elemento->save();
        return "true";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $elemento = \App\Elemento::find($id);
        return view('elemento.edit', compact('elemento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $elemento = \App\Elemento::find($id);
        $elemento->nomeEle = $request->get('nomeEle');
        $elemento->codOp = $request->get('codOp');
        $elemento->ritmo = $request->get('ritmo');
        $elemento->interferencia = $request->get('interferencia');
        $elemento->concessao = $request->get('concessao');
        $elemento->qntVezes = $request->get('qntVezes');
        $elemento->porPeca = $request->get('porPeca');
        $elemento->save();
        return "true";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) 
    {
        $elemento = \App\Elemento::find($id);
        $elemento->delete();
        return "true";
    }

}
