@extends('layout')

@section('conteudo')

<div class="container-fluid">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tabela de Relatórios</h4>
                <div class="table-responsive"> 
                    <table class="table table-bordered table-striped verticle-middle">
                        <thead>
                            <tr>
                                <th scope="col">Relatório</th>                                                
                                <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Relarório exemplo</td>


                                <td><span><a href="./.html" data-toggle="tooltip" data-placement="top" title="Visualizar"><i class="fa fa-arrow-circle-o-right color-muted m-r-5"></i> </a></span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> 

@stop