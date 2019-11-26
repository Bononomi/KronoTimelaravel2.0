@extends('layout')

@section('conteudo') 

<script>
    function addUsuario(url){

    confirma = confirm("Deseja realmente cadastrar o usuario?");
    if (confirma){


    dados = $('#formAdd').serialize();
    $.ajax({
    method: 'post',
            url: url,
            data: dados,
            dataType: 'html',
            success: function (data) {
            location.href = "/usuario";
            },
            error: function (argument){
            alert ('Falha ao cadastrar usuario!');
            }
    });
    }
    return false;
    }


</script>

<form action="" method="post" id="formAdd" onsubmit="return addUsuario('{{route('usuario.store')}}')">
    @csrf
    @method('post')

    
    <div class="form-group row">
        <label class="col-lg-4 col-form-label" for="val-currency">Email <span class="text-danger">*</span>
        </label>

        <div class="col-lg-6">
            <input value="" type="text" class="form-control" id="val-currency" name="emailUsu">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-4 col-form-label" for="val-currency">Senha <span class="text-danger">*</span>
        </label>

        <div class="col-lg-6">
            <input value="" type="text" class="form-control" id="val-currency" name="senhaUsu">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-4 col-form-label" for="val-currency">Repetir senha <span class="text-danger">*</span>
        </label>

        <div class="col-lg-6">
            <input value="" type="text" class="form-control" id="val-currency" name="senhaUsu">
        </div>
    </div>



    <div class="form-group row">
        <div class="col-lg-8 ml-auto">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>


    @stop