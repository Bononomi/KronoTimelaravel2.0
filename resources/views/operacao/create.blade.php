@extends('layout')

@section('conteudo') 

<script>
    function addOperacao(url){

    confirma = confirm("Deseja realmente cadastrar a operação?");
    if (confirma){


    dados = $('#formAdd').serialize();
    $.ajax({
    method: 'post',
            url: url,
            data: dados,
            dataType: 'html',
            success: function (data) {
            location.href = "/operacao";
            },
            error: function (argument){
            alert ('Falha ao cadastrar produto!');
            }
    });
    }
    return false;
    }


</script>

<form action="" method="post" id="formAdd" onsubmit="return addOperacao('{{route('operacao.store')}}')">
    @csrf
    @method('post')

<!-- Nome de Operação -->
<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="NomeOperacao">Nome Operação <span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="NomeOperacao" name="nomeOp" placeholder="Nome Operação">
    </div>
</div>
<!-- Puxar o Produto -->
<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="idProduto">ID do Produto<span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="NomeMaquina" name="codPro" placeholder="ID do Produto">
    </div>
</div>

<!--Nome da Maquina -->

<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="NomeMaquina">Nome da Máquina<span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="NomeMaquina" name="maquinaOp" placeholder="Nome da Máquina">
    </div>
</div>

<!-- Tipo de Estudo (Talve dps vai ter umas ja cadastradas mas por enquanto escrver)-->
<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="TipoEstudo">Tipo de Estudo<span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="TipoEstudo" name="tipoEstudoOp" placeholder="Tipo de Estudo">
    </div>
</div>

<!-- Nome do cronometrista -->
<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="NomeCronometrista">Nome do Cronometrista<span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="NomeCronometrista" name="cronometrista" placeholder="Nome do Cronometrista">
    </div>
</div>

<div class="form-group row">
    <div class="col-lg-8 ml-auto">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</div>

</form>


@stop