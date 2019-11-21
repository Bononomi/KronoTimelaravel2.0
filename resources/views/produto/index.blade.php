@extends('layout')

@section('conteudo')



<script>
    function delProduto(id, url){
        
        confirma = confirm("Deseja realmente eliminar o produto?");
        if(confirma){
        
        
        dados = $('#'+id).serialize();
    
        $.ajax({
        method: 'post',
        url: url,
        data: dados,
        dataType: 'html',
        success: function (data) {
            $('#linha'+id).remove();
        },
        error: function (argument){
            alert ('Falha ao eliminar produto!');
            }
        });
            }
        return false;
    }

</script>



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

                            @foreach($produtos as $p)
                            <tr id="linhadel{{$p->codPro}}">
                                <th scope="row">{{$p->codPro}}</th>
                                <td>{{$p->nomPro}}</td>  

                                <td><span><a href="{{route('produto.edit', $p->codPro)}}" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil color-muted m-r-5"></i> </a>

                                        <a href="" onclick="return delProduto('del{{$p->codPro}}', '{{route('produto.destroy', $p->codPro)}}' )" data-toggle="tooltip" data-placement="top" title="Excluir"><i class="fa fa-close color-danger"></i></a></span>
                                    <form action="" method="post" id="del{{$p->codPro}}">
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
