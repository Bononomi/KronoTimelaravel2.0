@extends('layout')

@section('conteudo') 


<script>
    function delOperacao(id, url) {

        confirma = confirm("Deseja realmente eliminar a operação?");
        if (confirma) {


            dados = $('#' + id).serialize();

            $.ajax({
                method: 'post',
                url: url,
                data: dados,
                dataType: 'html',
                success: function (data) {
                    $('#linha' + id).remove();
                },
                error: function (argument) {
                    alert('Falha ao eliminar operação!');
                }
            });
        }
        return false;
    }

</script>

<!-- #/ Conteúdo da DASHBOARD -->
<div class="container-fluid">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Listas de Operações</h4>
                <div class="table-responsive"> 
                    <table class="table table-bordered table-striped verticle-middle">
                        <thead>
                            <tr>
                                <th scope="col">ID operação</th>  
                                <th scope="col">Operação</th>                                              
                                <th scope="col">Produto</th>
                                <th scope="col">Máquina</th>
                                <th scope="col">Estudo</th>                              
                                <th scope="col">Cronometrista</th>
                                <th scope="col">Elemento</th>
                                <th scope="col">Ação</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                           

                                @foreach($operacoes ?? '' as $p)
                            <tr id="linhadel{{$p->codOp}}">
                                <th scope="row">{{$p->codOp}}</th>
                                <td>{{$p->nomeOp}}</td>
                                <td>{{$p->codPro}}</td>
                                <td>{{$p->maquinaOp}}</td>
                                <td>{{$p->tipoEstudoOp}}</td>
                                <td>{{$p->cronometrista}}</td>
                                
                                <td><span><a href="{{url('/')}}/elemento?codop={{$p->codOp}}" data-toggle="tooltip" data-placement="top" title="Elementos"><button type="submit" class="btn btn-primary">Elementos</button> </a>
                                <td><span><a href="{{url('/')}}/operacao/{{$p->codOp}}/edit" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil color-muted m-r-5"></i> </a>

                                        
                                  <a href="" onclick="return delOperacao('del{{$p->codOp}}', '{{route('operacao.destroy', $p->codOp)}}' )" data-toggle="tooltip" data-placement="top" title="Excluir"><i class="fa fa-close color-danger"></i></a></span>
                                    <form action="" method="post" id="del{{$p->codOp}}">
                                        @csrf
                                        @method('DELETE') 
                                    </form>
                                </td>
                            </tr>
                            @endforeach


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