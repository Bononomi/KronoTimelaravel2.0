@extends('layout')

@section('conteudo') 

<script>
    function editUsuario(url){

    confirma = confirm("Deseja realmente editar o usuario?");
    if (confirma){


    dados = $('#formEdit').serialize();
    $.ajax({
    method: 'post',
            url: url,
            data: dados,
            dataType: 'html',
            success: function (data) {
            location.href = "/usuario";
            },
            error: function (argument){
            alert ('Falha ao editar usuario!');
            }
    });
    }
    return false;
    }


</script>

<div>

<form action="" method="post" id="formEdit" onsubmit="return editUsuario('{{route('usuario.update', $usuario->codUsu)}}')">
    @csrf
    @method('patch')

    <div class="form-group row">
        <label class="col-lg-4 col-form-label" for="val-currency">Email <span class="text-danger"></span>
        </label>

        <div class="col-lg-6">
                <input value="{{$usuario->emailUsu}}" type="text" class="form-control" id="val-currency" name="emailUsu">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-4 col-form-label" for="val-currency">Senha <span class="text-danger"></span>
        </label>

        <div class="col-lg-6">
                <input value="{{$usuario->senhaUsu}}" type="text" class="form-control" id="val-currency" name="senhaUsu">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-4 col-form-label" for="val-currency">Repetir senha <span class="text-danger"></span>
        </label>

        <div class="col-lg-6">
                <input value="{{$usuario->senhaUsu}}" type="text" class="form-control" id="val-currency" name="senhaUsu">
        </div>
    </div>



    <div class="form-group row">
        <div class="col-lg-8 ml-auto">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </div>

</form>

</div>
@stop
