@extends('layout')

@section('conteudo') 


<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="NomeElemento">Nome Elemento<span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="NomeOperacao" name="NomeElemento" placeholder="Nome Elemento">
    </div>
</div>

<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="SelProdutos">Selecionar Operação <span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">

        <select required class="form-control" id="SelProdutos" name="SelProdutos">
            <option value="">Selecione uma Operação</option>
            <option value="Aqui dentro vai ser o numero do elemento la no banco de dados">Junção</option>
            <option>Recorte</option>
            
        </select>
    </div>

</div>



<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="Ritmo">Ritmo<span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="NomeMaquina" name="Ritmo" placeholder="Ritmo">
    </div>
</div>

<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="Interferencia">Interferência<span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="TipoEstudo" name="Interferencia" placeholder="Interferência">
    </div>
</div>

<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="Concessao">Concessão<span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="NomeCronometrista" name="Concessao" placeholder="Concessão">
    </div>
</div>

<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="qntVezes">Quantidade de Vezes<span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="NomeCronometrista" name="qntVezes" placeholder="Quantidade de Vezes">
    </div>
</div>

<div class="form-group row">
    <label  class="col-lg-4 col-form-label" for="porPeca">Por Peça<span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="NomeCronometrista" name="porPeca" placeholder="Por Peça">
    </div>
</div>

<div class="form-group row">
    <div class="col-lg-8 ml-auto">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</div>



@stop