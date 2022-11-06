@extends('layouts.main')

@section('title', 'CPC - Controle de Programação')

@section('content')

<!-- Conteudo da Pagina-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">CONTROLE DE PROGRAMAÇÃO - NTE 01</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</a></li>
            <li class="breadcrumb-item">Ntes</li>
            <li class="breadcrumb-item active" aria-current="page">Controle</li>
        </ol>
    </div>
    <!--Row-->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Tabela Simples -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-end">
                    <a title="Contatos Gestores" href=""><button class=" btn btn-sm btn-success"><strong>CONTATOS</strong> <i class="fa-solid fa-phone-volume"> </i></button></a>
                    <!-- <a title="Contatos Gestores" href=""><button class="hide btn btn-sm btn-success"><strong>TIPOLOGIA / MODALIDADE</strong> <i class="fa-solid fa-search"> </i></button></a> -->
                </div>
                <div class="table-responsive mt-2 p-1 ">
                    <table id="myTable" class="table  compact table-hover align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th></th>
                                <th>Municipio</th>
                                <th>Unidade Escolar</th>
                                <th class="text-center">Cod. Sec</th>
                                <th class="text-center">Sit. Digitação</th>
                                <th class="text-center">Sit. Homologação</th>
                                <th class="text-center">Carencia</th>
                                <th class="text-center">Componente</th>
                                <th class="text-center">Detalhar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                            @foreach ($controle_ntes as $controle_nte)
                                <td class="text-center"><i class="fa-solid fa-s"></i></td>
                                <td class="">{{$controle_nte -> municipio}}</td>
                                <td class="">{{$controle_nte -> unidade_escolar}}</td>
                                <td class="text-center">{{$controle_nte -> cod_unidade}}</td>
                                <td class="text-center">{{$controle_nte -> digitacao}}</td>
                                <td class="text-center">{{$controle_nte -> homologacao}}</td>
                                <td class="text-center">{{$controle_nte -> carencia}}</td>
                                <td class="text-center">{{$controle_nte -> componente}}</td>
                                <td class="text-center"><a href="/show/uee/{{$controle_nte -> id}}"><button class="btn btn-sm btn-primary"><i class="fas fa-search"></i></button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
    <!--Row-->
</div>
<!---Fim do Conteudo da Pagina-->

@endsection