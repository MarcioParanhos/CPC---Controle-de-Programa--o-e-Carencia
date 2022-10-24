<!-- Inicio do Header do sistema -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>@yield('title')</title>
    <!-- Link do Arquivo BootsTrap onde são feitas as alterações no cod. do bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Link do CSS do Sistema -->
    <link href="/css/styles.css" rel="stylesheet">
    <!-- Import do DataTables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- Icones do sistema -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="assets/js/app.js" defer></script>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon">
                </div>
                <div class="sidebar-brand-text mx-3">CPC Programação</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="/">
                    <i class="fas fa-home"></i>
                    <span>HOME</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Gerencial
            </div>
            <li class=" nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap" aria-expanded="true" aria-controls="collapseBootstrap">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>NTES</span>
                </a>
                <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Controle</h6>
                        <a class="collapse-item" href="/nte"><i class="fa-solid fa-angle-right"></i> 01</a>
                        <a class="collapse-item" href="#"><i class="fa-solid fa-angle-right"></i> 02</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#CollapseCarencia" aria-expanded="true" aria-controls="collapseForms">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    <span>CARÊNCIA</span>
                </a>
                <div id="CollapseCarencia" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Real e Temporaria</h6>
                        <a class="collapse-item" href="#"><i class="fa-solid fa-magnifying-glass-plus"></i> REAL</a>
                        <a class="collapse-item" href="#"><i class="fa-solid fa-magnifying-glass-plus"></i> TEMPORÁRIA</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#CollapseExedentes" aria-expanded="true" aria-controls="collapseForms">
                    <i class="fa-solid fa-user-large-slash"></i>
                    <span>EXCEDENTES</span>
                </a>
                <div id="CollapseExedentes" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Controle de Excedentes</h6>
                        <!-- <a class="collapse-item" href="#"><i class="fa-solid fa-plus"></i> INCLUIR</a> -->
                        <a class="collapse-item" href="#"><i class="fa-solid fa-magnifying-glass"></i> CONSULTAR</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#CollapseRegFuncional" aria-expanded="true" aria-controls="collapseForms">
                    <i class="fa-solid fa-users"></i>
                    <span>REG. FUNCIONAL</span>
                </a>
                <div id="CollapseRegFuncional" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Regularização Funcional</h6>
                        <a class="collapse-item" href="#"><i class="fa-solid fa-plus"></i> INCLUIR</a>
                        <a class="collapse-item" href="#"><i class="fa-solid fa-magnifying-glass"></i> CONSULTAR</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForms" aria-expanded="true" aria-controls="collapseForms">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>DIARIO</span>
                </a>
                <div id="collapseForms" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Diario Oficial</h6>
                        <a class="collapse-item" href="#"><i class="fa-solid fa-plus"></i> INCLUIR</a>
                        <a class="collapse-item" href="#"><i class="fa-solid fa-magnifying-glass"></i> CONSULTAR</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true" aria-controls="collapseForm">
                    <i class="fa-solid fa-file-waveform"></i>
                    <span>RELATORIOS</span>
                </a>
                <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gerenciais</h6>
                        <a class="collapse-item" href="#"><i class="fa-solid fa-file-waveform"></i></i> CARÊNCIA</a>
                        <a class="collapse-item" href="#"><i class="fa-solid fa-file-waveform"></i></i> EXEDENTES</a>
                        <a class="collapse-item" href="#"><i class="fa-solid fa-file-waveform"></i></i> REG. FUNCIONAL</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Configuração
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePage">
                    <i class="fa-solid fa-user"></i>
                    <span>USUARIOS</span>
                </a>
                <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#"><i class="fa-solid fa-user-gear"></i> Editar Usuário</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="version" id="version-ruangadmin"></div>
        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class=" d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               2022&nbsp;<i class="fa-solid fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="navbar-search">
                                    <div class="input-group">
                                        <select id="Digitaçao" name="tipo_movimento" class="form-control" value="" required>
                                            <option class="" value="Pendente" selected>2022</option>
                                            <option class="" value="Concluida">2021</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fa-solid fa-angles-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="ml-2 d-none d-lg-inline text-white">Marcio paranhos &nbsp;</span>
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="user_config.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configurações
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->
                @yield('content')
                <!-- Modal Logout -->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabelLogout">Ohh Não!</h5>
                            </div>
                            <div class="modal-body">
                                <p>Tem certeza que deseja sair?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <a href="./config/auth.php" class="btn btn-primary">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>copyright &copy;
                            <!-- Script que pega o ano atual -->
                            <script>
                                document.write(new Date().getFullYear());
                            </script> - developed by
                            <b><a href="#" target="_blank">Marcio Paranhos</a></b>
                        </span>
                    </div>
                </div>
            </footer>
            <!-- Footer -->
        </div>
    </div>
    <!-- Voltar ao TOP -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa-solid fa-angles-up"></i>
    </a>
    <!-- scripts do sistema -->
    <script src="/js/jquery/jquery.min.js"></script>
    <script src="/js/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <!-- DataTables das tabelas -->
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                ordering: false, //Oculta a ordem da tabela
                paging: false, //Oculta a quantidade de registros por pagina
                info: false, // Oculta informação de numeros por pagina
                lengthMenu: [ //Quantidade de registros por paginas
                    [-1, 10, 25, 50, 100],
                    ['Todos', 10, 25, 50, 100],
                ],
                language: { // Tradução do DataTables
                    lengthMenu: 'Exibindo _MENU_ Registros por página',
                    zeroRecords: 'Nada encontrado! desculpe =(',
                    info: 'Mostrando Pagina _PAGE_ de _PAGES_',
                    infoEmpty: 'Não há registros disponíveis',
                    infoFiltered: '(filtrado de _MAX_ registros totais)',
                    sSearch: "Buscar",
                    oPaginate: {
                        sFirst: "Primeira",
                        sNext: "Próxima",
                        sPrevious: "Anterior",
                        sLast: "Última",
                    }
                },
            });
        });
    </script>
</body>

</html>