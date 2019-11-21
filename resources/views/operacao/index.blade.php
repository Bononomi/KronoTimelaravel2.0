@extends('layout')

@section('conteudo') 


        <!-- #/ Conteúdo da DASHBOARD -->
        <div class="container-fluid">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Listas de Operações</h4>
                        <div class="table-responsive"> 
                            <table class="table table-bordered table-striped verticle-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">Operação</th>                                              
                                        <th scope="col">Produto</th>
                                        <th scope="col">Máquina</th>
                                        <th scope="col">Estudo</th>
                                        <th scope="col">Cronometrista</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Recorte</td>
                                        <td>camisa</td>
                                        <td>DeathMachine</td>
                                        <td>Ressureição</td>
                                        <td>Tinhoso</td>


                                        <td><span><a href="{{url('/')}}/operacao/1/edit" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Excluir"><i class="fa fa-close color-danger"></i></a></span>
                                        </td>
                                    </tr>

                                    

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->




@stop