@extends('layout')

@section('conteudo')

<script>
   function editProduto(url){
        
        confirma = confirm("Deseja realmente editar o produto?");
        if(confirma){
        
        
        dados = $('#formEdit').serialize();
    
        $.ajax({
        method: 'post',
        url: url,
        data: dados,
        dataType: 'html',
        success: function (data) {
         location.href = "/produto";
        },
        error: function (argument){
            alert ('Falha ao editar produto!');
            }
        });
            }
        return false;
    }


</script>



<div class="container-fluid">

    <div class="container-fluid mt-3">

        <!-- #/ Conteúdo da DASHBOARD -->
        <form action="" method="post" id="formEdit" onsubmit="return editProduto('{{route('produto.update', $produto->codPro)}}')">
            @csrf
            @method('patch')
        
        <div class="form-group row">
            <label class="col-lg-4 col-form-label" for="val-currency">Produto <span class="text-danger">*</span>
            </label>
            <div class="col-lg-6">
                <input value="{{$produto->nomPro}}" type="text" class="form-control" id="val-currency" name="nomPro">
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


@stop
