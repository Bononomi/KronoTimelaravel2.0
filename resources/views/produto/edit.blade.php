@extends('layout')

@section('conteudo')

<div class="content-body">

    <div class="container-fluid mt-3">

        <!-- #/ Conteúdo da DASHBOARD -->
        <div class="form-group row">
            <label class="col-lg-4 col-form-label" for="val-currency">Produto <span class="text-danger">*</span>
            </label>
            <div class="col-lg-6">
                <input type="text" class="form-control" id="val-currency" name="val-currency">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-lg-8 ml-auto">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>

    </div>
</div>

@stop
