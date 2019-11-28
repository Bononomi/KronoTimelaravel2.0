@extends('layout')

@section('conteudo')

<script>
    function editElemento(url){

    confirma = confirm("Deseja realmente editar o elemento?");
    if (confirma){


    dados = $('#formEdit').serialize();
    $.ajax({
    method: 'post',
            url: url,
            data: dados,
            dataType: 'html',        
            success: function (data) {
            location.href = "/elemento?codop="+$('#codOp').val();
            },
            error: function (argument){
            alert ('Falha ao editar elemento!');
            }
    });
    }
    return false;
    }


</script>



<div class="container-fluid">

    <div class="container-fluid mt-3">

        <!-- #/ Conteúdo da DASHBOARD -->
        <form action="" method="post" id="formEdit" onsubmit="return editElemento('{{route('elemento.update', $elemento->codEle)}}')">
            @csrf
            @method('patch')

            <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="val-currency">Nome Elemento <span class="text-danger">*</span>
                </label>
                <div class="col-lg-6">
                    <input value="{{$elemento->nomeEle}}" type="text" class="form-control" id="val-currency" name="nomeEle">
                </div>
            </div>
<!--
            <div class="form-group row">
                <label  class="col-lg-4 col-form-label" for="SelProdutos">Selecionar Operação <span class="text-danger">*</span>
                </label>3
                <div class="col-lg-6">

                   
                    <select required class="form-control" id="SelProdutos" name="SelProdutos">
                        <option value="">Selecione uma Operação</option>
                        <option value="Aqui dentro vai ser o numero do elemento la no banco de dados">Junção</option>
                        <option>Recorte</option>

                    </select>
                </div>

            </div>   
-->
    <div class="form-group row">
        <label  class="col-lg-4 col-form-label" for="SelProdutos">Selecionar Operação <span class="text-danger">*</span>
        </label>
        <div class="col-lg-6">
            <input value="" type="text" class="form-control" id="codOp" name="codOp">
        </div>
    </div>



            <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="val-currency">Ritmo <span class="text-danger">*</span>
                </label>
                <div class="col-lg-6">
                    <input value="{{$elemento->ritmo}}" type="text" class="form-control" id="val-currency" name="ritmo">
                </div>
            </div>


            <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="val-currency">Interferência <span class="text-danger">*</span>
                </label>
                <div class="col-lg-6">
                    <input value="{{$elemento->interferencia}}" type="text" class="form-control" id="val-currency" name="interferencia">
                </div>
            </div>


            <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="val-currency">Concessão <span class="text-danger">*</span>
                </label>
                <div class="col-lg-6">
                    <input value="{{$elemento->concessao}}" type="text" class="form-control" id="val-currency" name="concessao">
                </div>
            </div>    


            <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="val-currency">Quantidade de Vezes<span class="text-danger">*</span>
                </label>
                <div class="col-lg-6">
                    <input value="{{$elemento->qntVezes}}" type="text" class="form-control" id="val-currency" name="qntVezes">
                </div>
            </div>    


            <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="val-currency">Por Peça<span class="text-danger">*</span>
                </label>
                <div class="col-lg-6">
                    <input value="{{$elemento->porPeca}}" type="text" class="form-control" id="val-currency" name="porPeca">
                </div>
            </div>    

            <div class="form-group row">
                <div class="col-lg-8 ml-auto">
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </div>


        </form>
    </div>
</div>

</form>


@stop
