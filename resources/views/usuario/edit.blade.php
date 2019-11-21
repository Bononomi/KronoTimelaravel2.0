@extends('layout')

@section('conteudo') 

<div class="form-group row">
    <label class="col-lg-4 col-form-label" for="val-currency">Nome <span class="text-danger"></span>
    </label>

    <div class="col-lg-6">
        <input type="text" class="form-control" id="val-currency" name="val-currency" placeholder="">
    </div>
</div>

<div class="form-group row">
    <label class="col-lg-4 col-form-label" for="val-currency">Email <span class="text-danger"></span>
    </label>

    <div class="col-lg-6">
        <input type="text" class="form-control" id="val-currency" name="val-currency" placeholder="">
    </div>
</div>

<div class="form-group row">
    <label class="col-lg-4 col-form-label" for="val-currency">Senha <span class="text-danger"></span>
    </label>

    <div class="col-lg-6">
        <input type="text" class="form-control" id="val-currency" name="val-currency" placeholder="">
    </div>
</div>

<div class="form-group row">
    <label class="col-lg-4 col-form-label" for="val-currency">Repetir senha <span class="text-danger"></span>
    </label>

    <div class="col-lg-6">
        <input type="text" class="form-control" id="val-currency" name="val-currency" placeholder="">
    </div>
</div>



<div class="form-group row">
    <div class="col-lg-8 ml-auto">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</div>


@stop
