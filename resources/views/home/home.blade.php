@extends('layouts.main')

@section('title', 'CPC - Controle de Programação')

@section('content')

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./home.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>

    <div class="row mb-3">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body borded-left">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Sedes Homologadas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span>Since last month</span> -->
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body borded-left">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Unidades Sede Digitadas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                        <span>Since last years</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New User Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body borded-left">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total de Carencia Real</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">10</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                        <span>Since last month</span>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body borded-left">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Sedes Pendentes Homologar</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <!-- <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                        <span>Since yesterday</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body borded-left">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Anexos Homologados</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <!-- <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                        <span>Since yesterday</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body borded-left">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Anexos Digitados</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <!-- <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                        <span>Since yesterday</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body borded-left">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total de Carencia Temporaria</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <!-- <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                        <span>Since yesterday</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body borded-left">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Anexos Pendentes Homologar</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <!-- <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                        <span>Since yesterday</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive mt-2 p-1 ">
            <table class="table compact table-hover  align-items-center table-flush">
                <thead class="bg-primary">
                    <tr>
                        <th id="th-start" class="text-center">NTE</th>
                        <th class="text-center">QTD. UNIDADES</th>
                        <th class="text-center">SEDES</th>
                        <th class="text-center">ANEXOS</th>
                        <th class="text-center">EMITEC</th>
                        <th class="text-center">SEDES DIGITADAS</th>
                        <th class="text-center">ANEXOS DIGITADOS</th>
                        <th class="text-center">SEDES HOMOLOGADAS</th>
                        <th id="th-end" class="text-center">ANEXOS HOMOLOGADOS</th>
                    </tr>
                </thead>
                <tbody>
                    <td class="text-center">01</td>
                    <td class="text-center">10</td>
                    <td class="text-center">10</td>
                    <td class="text-center">10</td>
                    <td class="text-center">0</td>
                    <td class="text-center">10</td>
                    <td class="text-center">10</td>
                    <td class="text-center">10</td>
                    <td class="text-center">10</td>
                    </tr>
                </tbody>

            </table>
            <div class="card-footer"></div>
        </div>
    </div>
    <!-- </div>
  </div>
  </div> -->
    <!--Row-->
</div>
<!---Container Fluid-->

@endsection