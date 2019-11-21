@extends('layout')

@section('conteudo') 

<!-- Nome de Operação -->
<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="NomeOperacao">Nome Operação <span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="NomeOperacao" name="NomeOperacao" placeholder="Nome Operação">
    </div>
</div>
<!-- Puxar o Produto -->
<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="SelProdutos">Selecionar Produto <span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">

        <select required class="form-control" id="SelProdutos" name="SelProdutos">
            <option value="">Selecione um Produto</option>
            <option value="Aqui dentro vai ser o numero do produto la no banco de dados">Tenis</option>
            <option>Calca</option>
            <option>Camisete</option>
        </select>
    </div>

</div>

<!--Nome da Maquina -->

<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="NomeMaquina">Nome da Máquina<span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="NomeMaquina" name="NomeMaquina" placeholder="Nome da Máquina">
    </div>
</div>

<!-- Tipo de Estudo (Talve dps vai ter umas ja cadastradas mas por enquanto escrver)-->
<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="TipoEstudo">Tipo de Estudo<span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="TipoEstudo" name="TipoEstudo" placeholder="Tipo de Estudo">
    </div>
</div>

<!-- Nome do cronometrista -->
<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="NomeCronometrista">Nome do Cronometrista<span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="NomeCronometrista" name="NomeCronometrista" placeholder="Nome do Cronometrista">
    </div>
</div>

<div class="form-group row">
    <div class="col-lg-8 ml-auto">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</div>



@stop