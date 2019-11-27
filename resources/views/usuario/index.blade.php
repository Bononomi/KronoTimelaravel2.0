@extends('layout')

@section('conteudo') 

<script>
    function delUsuario(id, url){

    confirma = confirm("Deseja realmente eliminar o seu usuario?");
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
            alert ('Falha ao eliminar usuario!');
            }
    });
    }
    return false;
    }

</script>


<div class="content-body">

    <div class="container-fluid mt-3">

        <div class="col p-md-0">

        </div>

        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                
                <div class="card">

                    <div class="card-body">
                        <div class="media align-items-center mb-4">

                            <div class="media-body">
                                <h3 class="mb-0">Meu Perfil</h3>

                            </div>
                        </div>

                        @foreach($usuarios as $u)
                        <ul class="card-profile__info">
                            <li><strong class="text-dark mr-4">Email</strong> <span>{{$u->emailUsu}}</span></li>
                        </ul>

                        <a href="{{url('/')}}/usuario/{{$u->codUsu}}/edit"><button type="" class="btn mb-1 btn-success">Editar</button></a>
                        
                            @csrf
                            
                        </form>
                    </div>
                     @endforeach

                </div>  
               

            </div>
            <!-- #/ container -->
        </div>

    </div>
</div>



@stop