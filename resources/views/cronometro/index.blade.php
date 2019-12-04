@extends('layout')

@section('conteudo') 



<div class="content-body text-center">

    <div class="container-fluid mt-3 ">

        <div id="principal">
            <div class="primario">
                <header>
                    <p id="flag">

                    </p>
                    <div id="logo">
                        <h1 class="center">Cronômetro</h1>
                    </div>
                </header>
                <div class="box">
                    <h1><div id="difference">00:00:000</div></h1>
                </div>	
                <div id="acoes">
                    <button type="button" class="btn mb-1 btn-success" onclick="continuar();">Iniciar</button>
                    <button type="button" class="btn mb-1 btn-warning">Tempo Estranho</button>

                </div>

            </div>


        </div>

    </div>
</div>

@stop