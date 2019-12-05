@extends('layout')

@section('conteudo')

<!-- Puxar a operação -->
<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="IdOperacao">ID da Operação<span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="int" class="form-control" id="QuantLeituras" name="IdOperacao" placeholder="ID da Operação">
    </div>

</div>

<!--Quantidade de Leituras -->
<!-- ver se tem como fazer com int -->
<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="QuantLeituras">Quantide de Leituras<span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="int" class="form-control" id="QuantLeituras" name="QuantLeituras" placeholder="Quantide de Leituras">
    </div>
</div>

<!-- Turno do Operador-->
<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="TurnoOpera">Turno do Operador<span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="TurnoOpera" name="TurnoOpera" placeholder="Turno do Operador">
    </div>
</div>

<!-- Nome do Operador -->
<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="NomeOperador">Nome do Operador<span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="NomeOperador" name="NomeOperador" placeholder="Nome Completo do Operador">
    </div>
</div>

<!-- Observação da tomada de tempo -->
<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="ObsTomada">Observação da tomada de tempo<span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="ObsTomada" name="ObsTomada" placeholder="Alguma Observação em específico desta tomada de tempo">
    </div>
</div>

<div class="form-group row">
    <div class="col-lg-8 ml-auto">
        <a class="btn btn-primary" href="{{url('/')}}/cronometro">Iniciar Tomada de Tempo</a>
    </div>
</div>


@stop