@extends('layout')

@section('conteudo')

<script>
    function addProduto(url){

    confirma = confirm("Deseja realmente cadastrar o produto?");
    if (confirma){


    dados = $('#formAdd').serialize();
    $.ajax({
    method: 'post',
            url: url,
            data: dados,
            dataType: 'html',
            success: function (data) {
            location.href = "/produto";
            },
            error: function (argument){
            alert ('Falha ao cadastrar produto!');
            }
    });
    }
    return false;
    }


</script>

<div class="container-fluid">
    <div class="col-lg-10">


         
        <!-- #/ Conteúdo da DASHBOARD -->

        <form action="" method="post" id="formAdd" onsubmit="return addProduto('{{route('produto.store')}}')">
            @csrf
            @method('post')
            
            <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="val-currency">Produto <span class="text-danger">*</span>
                </label>
                <div class="col-lg-6">
                    <input value="" type="text" class="form-control" id="val-currency" name="nomPro">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-lg-8 ml-auto">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>


        </form>
    </div>
</div>

@stop
