@extends('layout')

@section('conteudo')
<div class="container-fluid">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tabela de produtos</h4>
                <div class="table-responsive"> 
                    <table class="table table-bordered table-striped verticle-middle">
                        <thead>
                            <tr>
                                <th scope="col">Produto</th>                                                
                                <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>camisa</td>


                                <td><span><a href="./editar.html" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Excluir"><i class="fa fa-close color-danger"></i></a></span>
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

@stop
