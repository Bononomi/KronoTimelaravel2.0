@extends('layout')

@section('conteudo') 


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


                        <ul class="card-profile__info">
                            <li><strong class="text-dark mr-4">Nome</strong></li>
                        </ul>

                        <ul class="card-profile__info">
                            <li><strong class="text-dark mr-4">Email</strong> <span>name@domain.com</span></li>
                        </ul>

                        <a href="{{url('/')}}/usuario/1/edit"><button type="button" class="btn mb-1 btn-success">Editar</button></a>
                        <button type="button" class="btn mb-1 btn-danger">Excluir minha conta</button>
                    </div>
                </div>  


            </div>
            <!-- #/ container -->
        </div>

    </div>
</div>



@stop