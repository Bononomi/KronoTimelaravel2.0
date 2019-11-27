@extends('layout')

@section('conteudo')



<script>
    function delElemento(id, url){

    confirma = confirm("Deseja realmente eliminar o elemento?");
    if (confirma){


    dados = $('#' + id).serialize();
    $.ajax({
    method: 'post',
            url: url,
            data: dados,
            dataType: 'html',
            success: function (data) {
            $('#linha' + id).remove();
            },
            error: function (argument){
            alert ('Falha ao eliminar elemento!');
            }
    });
    }
    return false;
    }

</script>



<div class="container-fluid">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tabela de elementos</h4>
                <div class="table-responsive"> 
                    <table class="table table-bordered table-striped verticle-middle">
                        <thead>


                            <tr>
                                <th scope="col">ID Elemento</th>  
                                <th scope="col">Nome Operação</th> 
                                <th scope="col">Elementos</th> 
                                <th scope="col">Ritmo</th>  
                                <th scope="col">Interferência</th>  
                                <th scope="col">Concessão</th> 
                                <th scope="col">Quantas Vezes</th>
                                <th scope="col">Por Peça</th>  
                                <th scope="col">Ação</th>

                            </tr>


                        </thead>
                        <tbody>

                            @foreach($elementos as $e)
                            
                            <tr id="linhadel{{$e->codEle}}">
                                <th scope="row">{{$e->codEle}}</th>
                                <td>{{$e->nomeOp}}</td> 
                                <td>{{$e->nomeEle}}</td>
                                <td>{{$e->ritmo}}</td>
                                <td>{{$e->interferencia}}</td>
                                <td>{{$e->concessao}}</td>
                                <td>{{$e->qntVezes}}</td>
                                <td>{{$e->porPeca}}</td>
                               

                                <td><span><a href="{{route('elemento.edit', $e->codOp)}}" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil color-muted m-r-5"></i> </a>

                                        <a href="" onclick="return delElemento('del{{$e->codEle}}', '{{route('elemento.destroy', $e->codEle)}}' )" data-toggle="tooltip" data-placement="top" title="Excluir"><i class="fa fa-close color-danger"></i></a></span>
                                    <form action="" method="post" id="del{{$e->codEle}}">
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

@stop
