<!DOCTYPE html>
<html class="loading" lang="pt-br" data-textdirection="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Content management dashboard">
        <meta name="keywords" content="Dashboard, Administrative">
        <meta name="author" content="Agência Staff">
        <title>my title</title>

        <!-- {headerinc} -->

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <link href="https://app.agenciastaff.com.br/dashboard-v2/app-assets/images/logo/logomenor.png" rel="shortcut icon" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="https://app.agenciastaff.com.br/dashboard-v2/app-assets/vendors/css/vendors.min.css">
        <!-- <link rel="stylesheet" href="{{ URL::asset('css/vendors.min.css') }}">
         -->
        <link rel="stylesheet" type="text/css" href="https://app.agenciastaff.com.br/dashboard-v2/app-assets/vendors/css/charts/apexcharts.css">
        <link rel="stylesheet" type="text/css" href="https://app.agenciastaff.com.br/dashboard-v2/app-assets/vendors/css/extensions/swiper.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="https://app.agenciastaff.com.br/dashboard-v2/app-assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://app.agenciastaff.com.br/dashboard-v2/app-assets/css/bootstrap-extended.css">
        <link rel="stylesheet" type="text/css" href="https://app.agenciastaff.com.br/dashboard-v2/app-assets/css/colors.css">
        <link rel="stylesheet" type="text/css" href="https://app.agenciastaff.com.br/dashboard-v2/app-assets/css/components.css">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="https://app.agenciastaff.com.br/dashboard-v2/app-assets/css/core/menu/menu-types/vertical-menu.css">
        <link rel="stylesheet" type="text/css" href="https://app.agenciastaff.com.br/dashboard-v2/app-assets/css/pages/dashboard-ecommerce.css">
        <link rel="stylesheet" type="text/css" href="https://app.agenciastaff.com.br/dashboard-v2/app-assets/css/plugins/extensions/toastr.css">
        <!-- END: Page CSS-->

    </head>
    <!-- END: Header-->
    <body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    
    <div class="header-navbar-shadow"></div>

    <!--=================================
    loading -->
    <div id="page-loading" style="display: none;">
        <div id="page-loading-center">
            <!-- <img src="images/loading.gif" alt="Carregando..."> -->
        </div>
    </div>
    <!--=================================
    loading -->

        <!-- BEGIN: Header-->
        <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
            <div class="navbar-wrapper">
                <div class="navbar-container content">
                    <div class="navbar-collapse" id="navbar-mobile">
                        <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                            <ul class="nav navbar-nav">
                                <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
                            </ul>
                            <ul class="nav navbar-nav bookmark-icons">
                                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon bx bx-envelope"></i></a></li>
                                <!-- <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon bx bx-chat"></i></a></li> -->
                                <!-- <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon bx bx-check-circle"></i></a></li> -->
                                <!-- <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon bx bx-calendar-alt"></i></a></li> -->
                            </ul>
                            <!-- <ul class="nav navbar-nav">
                                <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon bx bx-star warning"></i></a>
                                    <div class="bookmark-input search-input">
                                        <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                                        <input class="form-control input" type="text" placeholder="Explore Frest..." tabindex="0" data-search="template-list">
                                        <ul class="search-list"></ul>
                                    </div>
                                </li>
                            </ul> -->
                        </div>
                        <ul class="nav navbar-nav float-right">
                            <!-- <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us mr-50"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr mr-50"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de mr-50"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt mr-50"></i> Portuguese</a></div>
                            </li> -->
                            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                            <!-- <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                                <div class="search-input">
                                    <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                                    <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="template-list">
                                    <div class="search-input-close"><i class="bx bx-x"></i></div>
                                    <ul class="search-list"></ul>
                                </div>
                            </li> -->
                            <li class="dropdown dropdown-notification nav-item">
                                <a class="nav-link nav-link-label" href="#" data-toggle="dropdown" id="bell-no-read-notifications">
                                    <i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i>
                                    <span class="badge badge-pill badge-danger badge-up" id="number-no-read-notifications">1</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <div class="dropdown-header px-1 py-75 d-flex justify-content-between">
                                            <span class="notification-title" id="number-new-notifications">
                                                1 Nova notificação
                                            </span>
                                        </div>
                                    </li>
                                    <li class="scrollable-container media-list" id="preview-notifications">
                                        <a class="d-flex justify-content-between user-notification" data-id="" href="#">
                                            <div class="media d-flex align-items-center">
                                                <div class="media-left pr-0"  id="image-user-profile-2">
                                                    <!-- <div class="avatar mr-1 m-0"><img src="" alt="avatar" height="40" width="40"></div> -->
                                                    <!-- <div class="avatar mr-1 m-0"><img src="images/notification-default.png" alt="avatar" height="40" width="40"></div> -->
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading"><span class="text-bold-500">Nome</span> <i class="bx bx-chevrons-right" style="font-size: 0.8rem;"></i>ok</h6><small class="notification-text">00:00h</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="#">Ver todas</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-user nav-item">
                                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <div class="user-nav d-sm-flex d-none">
                                        <span class="user-name">
                                            {{ Auth::user()->name }}
                                        </span>
                                        <span class="user-status text-muted">Disponível</span>
                                    </div>
                                    <!-- <span id="image-user-profile-1"><img class="round" src="images/user-default.jpg" alt="avatar" height="40" width="40"></span> -->
                                </a>
                                <div class="dropdown-menu dropdown-menu-right pb-0">
                                    <a class="dropdown-item" style="cursor: pointer;" data-toggle="modal" data-target="#editProfileModal"><i class="bx bx-user mr-50"></i> Editar Perfil</a>
                                    <a class="dropdown-item" href="#"><i class="bx bx-bell mr-50"></i> Notificações</a>
                                    <!-- <a class="dropdown-item" href="app-todo.html"><i class="bx bx-check-square mr-50"></i> Task</a>
                                    <a class="dropdown-item" href="app-chat.html"><i class="bx bx-message mr-50"></i> Chats</a> -->
                                    <div class="dropdown-divider mb-0"></div>
                                    <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Sair') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf

            @guest
            @endguest
            </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Staff</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
                <li class=" nav-item"><a href="#">
                    <i class="bx bx-home-alt"  data-icon="desktop"></i>
                    <span class="menu-title" data-i18n="Dashboard">Dashboard</span><!--<span class="badge badge-light-danger badge-pill badge-round float-right mr-2">2</span>--></a>
                    <ul class="menu-content">
                        <li ><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="eCommerce">Usuários</span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#">
                    <i class="bx bx-slider-alt"  data-icon="desktop"></i>
                    <span class="menu-title" data-i18n="config">Configuração</span><!--<span class="badge badge-light-danger badge-pill badge-round float-right mr-2">2</span>--></a>
                    <ul class="menu-content">
                        <li ><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="config">Grupos</span></a></li>
                        <li ><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="config">Institucional</span></a></li>                    </ul>
                </li>
                <li class="nav-item"><a href="#">
                    <i class="bx bx-menu"  data-icon="desktop"></i>
                    <span class="menu-title" data-i18n="menus">Menus</span><!--<span class="badge badge-light-danger badge-pill badge-round float-right mr-2">2</span>--></a>
                    <ul class="menu-content">
                        <li ><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="menu">Menu</span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#">
                    <i class="bx bxs-collection"  data-icon="desktop"></i>
                    <span class="menu-title" data-i18n="menus">Banners</span><!--<span class="badge badge-light-danger badge-pill badge-round float-right mr-2">2</span>--></a>
                    <ul class="menu-content">
                        <li ><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="menu">Banner</span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#">
                    <i class="bx bxs-customize"  data-icon="desktop"></i>
                    <span class="menu-title" data-i18n="menus">Produtos</span><!--<span class="badge badge-light-danger badge-pill badge-round float-right mr-2">2</span>--></a>
                    <ul class="menu-content">
                        <li ><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="menu">Produtos</span></a>
                        </li>
                        <li ><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="menu">Categorias</span></a>
                        </li>
                        <li ><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="menu">Atributos</span></a>
                        </li>
                        <li ><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="menu">Orçamentos</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#">
                    <i class="bx bx-dock-right"  data-icon="desktop"></i>
                    <span class="menu-title" data-i18n="menus">Páginas</span><!--<span class="badge badge-light-danger badge-pill badge-round float-right mr-2">2</span>--></a>
                    <ul class="menu-content">
                        <li ><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="menu">Páginas</span></a></li>
                        <li ><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="menu">Depoimentos</span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#">
                    <i class="bx bxs-store"  data-icon="desktop"></i>
                    <span class="menu-title" data-i18n="menus">E-commerce</span><!--<span class="badge badge-light-danger badge-pill badge-round float-right mr-2">2</span>--></a>
                    <ul class="menu-content">
                        <li ><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="menu">Estatísticas</span></a></li>
                        <li ><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="menu">Pedidos</span></a></li>
                        <li ><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="menu">Carrinhos</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="editProfileModal" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title card-title">EDITAR PERFIL</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-header" id="modalHeaderErrorProfile" style="display: none;">
                </div>
                <form method="POST" action="#" id="formUserProfile" accept-charset="utf-8" class="form" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 centered" id="infoFormUserProfile">
                                
                                <h2>Perfil</h2>
                                <input type="hidden" id="id-user-profile" class="form-control" value="1">
                                <label>Nome:</label><br>
                                <input type="text" id="name-user-profile" class="form-control" value="Seu Nome"><br>
                                <label>Email:</label><br>
                                <input type="text" id="email-user-profile" class="form-control" value="email@mail.com"><br>
                                <label>Login:</label><br>
                                <input type="text" id="login-user-profile" class="form-control" value="nome.login"><br>
                                <label>Senha:</label><br>
                                <input type="password" id="password-user-profile" class="form-control" value=""><br>
                                <label>Confirmar Senha:</label><br>
                                <input type="password" id="confpassword-user-profile" class="form-control" value=""><br>
                                <label>Imagem de Perfil:</label><br>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image-user-profile" name="image-user[]" aria-describedby="image-user-profile">
                                        <label class="custom-file-label" for="image-user-profile">Selecionar...</label>
                                    </div>
                                </div>
                            </div>
                            <div id="loading">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" id="save-user-profile">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">


            <!-- {content} -->


            </div>
        </div>
    </div>

    <!-- {footerinc} -->
    
    <!-- BEGIN: Vendor JS-->
    <script src="https://app.agenciastaff.com.br/dashboard-v2/app-assets/vendors/js/vendors.min.js"></script>
    <script src="https://app.agenciastaff.com.br/dashboard-v2/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="https://app.agenciastaff.com.br/dashboard-v2/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="https://app.agenciastaff.com.br/dashboard-v2/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="https://app.agenciastaff.com.br/dashboard-v2/app-assets/js/scripts/configs/vertical-menu-light.js"></script>
    <script src="https://app.agenciastaff.com.br/dashboard-v2/app-assets/js/core/app-menu.js"></script>
    <script src="https://app.agenciastaff.com.br/dashboard-v2/app-assets/js/core/app.js"></script>
    <script src="https://app.agenciastaff.com.br/dashboard-v2/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <script src="https://app.agenciastaff.com.br/dashboard-v2/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
    <script src="https://app.agenciastaff.com.br/dashboard-v2/app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
    
    </body>
</html>
