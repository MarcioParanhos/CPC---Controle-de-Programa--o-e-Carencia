@extends('layouts.main')

@section('title', 'CPC - Controle de Programação')

@section('content')

<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detalhes | {{$controle_ntes -> unidade_escolar}}</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item">Ntes</li>
      <li class="breadcrumb-item active" aria-current="page">Controle</li>
      <li class="breadcrumb-item active" aria-current="page">Detalhes</li>
    </ol>
  </div>
  <!-- Mensagem do crud vinda do arquivo -->
  <?php if (isset($printMsg) && $printMsg != '') : ?>
    <div class="green text-center alert alert-success alert-dismissible fade show" role="alert">
      <h5"><?= $printMsg ?></h5>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
  <?php endif; ?>
  <!-- Inicio do form de edição -->
  <div class="row">
    <div class="col-lg-12 mb-4">
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">NTE 0{{$controle_ntes -> nte}}</h6>
          <div>
            <button title="Carência - Adicionar / Consultar" data-target="#ExemploModalCentralizado" data-toggle="modal" class=" btn btn-sm btn-success">Carência <i class="fa-solid fa-magnifying-glass-plus"></i></button>
            <a title="Voltar" href="/nte/{{$controle_ntes -> nte}}"><button class="btn-sm btn btn-success"><i class=" fa-solid fa-rotate-left"></i></button></a>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <form class="forms-sample" action="config/nteProcess.php" method="post">
                        <input type="hidden" name="type" value="update">
                        <input id="id" hidden value="" name="id" type="number" class="form-control form-control-sm">
                        <input id="nte" hidden value="" name="nte" type="number" class="form-control form-control-sm">
                        <div class="form-row">
                          <div class="col-md-3">
                            <div class="position-relative form-group"><label for="municipio" class="">Municipio</label>
                              <input value="{{$controle_ntes -> municipio}}" name="municipio" readonly id="municipio" type="text" class="form-control form-control-sm">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="position-relative form-group">
                              <label for="unidade_escolar" class="">UnidadeEscolar</label>
                              <input value="{{$controle_ntes -> unidade_escolar}}" name="unidade_escolar" readonly required id="unidade_escolar" type="text" class="form-control form-control-sm">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="cod_unidade" class="">Cod.Unidade</label>
                              <input type="number" name="id" value="" hidden>
                              <input type="number" name="nte" value="" hidden>
                              <input id="cod_unidade" value="{{$controle_ntes -> cod_unidade}}" name="cod_unidade" readonly type="number" class="form-control form-control-sm" aria-label="Amount (to the nearest dollar)">
                            </div>
                          </div>
                        </div>
                          <div class="form-row">
                            <div class="mt-4 col-md-2">
                              <div class="position-relative form-group">
                                <label for="digitacao" class="">Digitação</label>
                                <select id="digitacao" name="digitacao" class="form-control" value="{{$controle_ntes -> digitacao}}" required>
                                  <option class="" value="{{$controle_ntes -> digitacao}}" selected>{{$controle_ntes -> digitacao}}</option>
                                  <option class="" value="Pendente">Pendente</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        <div class="form-group">
                          <label for="desc_digitacao">Descrição da Digitação</label>
                          <textarea name="desc_digitacao" class="form-control" id="desc_digitacao" rows="5">{{$controle_ntes -> desc_digitacao}}</textarea>
                        </div>
                          <div class="form-row">
                            <div class="mt-4 col-md-2">
                              <div class="position-relative form-group"><label for="homologacao" class="">Situação da homologação:</label>
                                <select id="homologacao" name="homologacao" class="form-control" value="" required>
                                  <option class="text-dark" value="{{$controle_ntes -> homologacao}}" selected>{{$controle_ntes -> homologacao}}</option>
                                  <option class="" value="Homologada">Homologada</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        <div class="form-group">
                          <label for="desc_homologacao">Descrição da Homologação</label>
                          <textarea name="desc_homologacao" class="form-control" id="desc_homologacao" rows="5">{{$controle_ntes -> desc_homologacao}}</textarea>
                        </div>
                        <div class="form-row">
                          <div class="mt-4 col-md-4">
                            <div class="position-relative form-group">
                              <label for="componente" class="">Componente</label>
                              <select id="componente" name="componente" class="form-control" value="" required>
                                <option class="text-dark" value="" selected>{{$controle_ntes -> componente}}</option>
                                <option class="" value="Fechado">Fechado</option>
                                <option class="" value="Aberto">Aberto</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="desc_componente">Descrição do Componente</label>
                          <textarea name="desc_componente" class="form-control" id="desc_componente" rows="5">{{$controle_ntes -> desc_componente}}</textarea>
                        </div>
                        <a title="Atualizar"><button type="submit" class=" btn btn-lg bg-purple btn-primary  mr-2"><i class="fa-solid fa-arrows-rotate"></i></i></button></a>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer"></div>
      </div>
    </div>
  </div>
  <!--Row-->
</div>
<!---Container Fluid-->
<!-- Modal de Incluir carencia  -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-center">
        <h4 class="modal-title text-center text-dark" id="TituloModalCentralizado"><strong>TIPO DE CARÊNCIA</strong></h4>
      </div>
      <div class="modal-body">
        <div class="d-flex justify-content-around">
          <a class="btn-carencia" title="Adicionar Carência" href="#"><button type="button" class="btn btn-carencia btn-primary"><i class="fa-solid fa-hourglass-end"></i> REAL</button></a>
          <a class="btn-carencia" title="Adicionar Carência" href="#"><button type="button" class="btn btn-carencia float-right btn-primary"><i class="fa-solid fa-hourglass"></i> TEAMPORARIA</button></a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection