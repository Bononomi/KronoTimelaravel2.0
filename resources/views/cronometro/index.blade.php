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
                    <h1><div id="reloj">00:00:000</div></h1>
                </div>	
                <div id="acoes">

                    <form name="cron" action="#" >
                        <button type="button" class="btn mb-1 btn-success" value="Iniciar" name="empieza">Iniciar</button>
                        <button type="button" class="btn mb-1 btn-danger" name="para">Parar</button>
                        <br/>
                        <br/>
                        <button type="button" class="btn mb-1 btn-success"name="continua">Continuar</button>
                        <br/>
                        <br/>
                        <button type="button" class="btn mb-1 btn-secondary" name="reinicia">Reiniciar</button>
                        <button type="button" class="btn mb-1 btn-warning" value="Próximo" id="proximo" name="proximo">Próximo</button>
                    </form>

                </div>

            </div>
            </br>
            </br>
            <div class="card-body">
                <h4 class="card-title">Cronometragem</h4>
                <div class="table-responsive"> 
                    <table class="table table-bordered table-striped verticle-middle">
                        <thead>
                            <tr>
                                <th scope="col">Nº Cronômetro</th>  
                                <th scope="col">Nome</th>                                              
                                <th scope="col">Tempo</th>                            
                            </tr>

                        </thead>

                        <tbody id="corpoTabela">
                            <tr>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="{{url('/')}}/js/cronometro.js"></script>

@stop