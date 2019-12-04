@extends('layout')

@section('conteudo') 

<script>
    function addElemento(url){

    confirma = confirm("Deseja realmente cadastrar o elemento?");
    if (confirma){


    dados = $('#formAdd').serialize();
    $.ajax({
    method: 'post',
            url: url,
            data: dados,
            dataType: 'html',
            success: function (data) {
            location.href = "/elemento";
            },
            error: function (argument){
            alert ('Falha ao cadastrar produto!');
            }
    });
    }
    return false;
    }


</script>

<form action="" method="post" id="formAdd" onsubmit="return addElemento('{{route('elemento.store')}}')">
    @csrf
    @method('post')

    <div class="form-group row">
        <label  class="col-lg-4 col-form-label" for="NomeElemento">Nome Elemento<span class="text-danger">*</span>
        </label>
        <div class="col-lg-6">
            <input value="" type="text" class="form-control" id="val-currency" name="nomeEle">
        </div>
    </div>
<!--
    <div class="form-group row">
        <label  class="col-lg-4 col-form-label" for="SelProdutos">Selecionar Operação <span class="text-danger">*</span>
        </label>

        <div class="col-lg-6">

            <select required class="form-control" id="SelProdutos" name="SelProdutos">
                <option value="">Selecione uma Operação</option>
                <option value="Aqui dentro vai ser o numero do elemento la no banco de dados">operacao</option>
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
        <label  class="col-lg-4 col-form-label" for="Ritmo">Ritmo<span class="text-danger">*</span>
        </label>
        <div class="col-lg-6">
            <input value="" type="text" class="form-control" id="val-currency" name="ritmo">
        </div>
    </div>

    <div class="form-group row">
        <label  class="col-lg-4 col-form-label" for="Interferencia">Interferência<span class="text-danger">*</span>
        </label>
        <div class="col-lg-6">
            <input value="" type="text" class="form-control" id="val-currency" name="interferencia">
        </div>
    </div>

    <div class="form-group row">
        <label  class="col-lg-4 col-form-label" for="Concessao">Concessão<span class="text-danger">*</span>
        </label>
        <div class="col-lg-6">
            <input value="" type="text" class="form-control" id="val-currency" name="concessao">
        </div>
    </div>

    <div class="form-group row">
        <label  class="col-lg-4 col-form-label" for="qntVezes">Quantidade de Vezes<span class="text-danger">*</span>
        </label>
        <div class="col-lg-6">
            <input value="" type="text" class="form-control" id="val-currency" name="qntVezes">
        </div>
    </div>

    <div class="form-group row">
        <label  class="col-lg-4 col-form-label" for="porPeca">Por Peça<span class="text-danger">*</span>
        </label>
        <div class="col-lg-6">
            <input value="" type="text" class="form-control" id="val-currency" name="porPeca">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-8 ml-auto">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>

</form>

    @stop