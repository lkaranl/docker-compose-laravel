<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Psiqui | Psicólogos</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="apple-touch-icon" sizes="57x57" href="../../../../img//apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../../../img//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../../../img//apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../../../../img//apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../../../../img//apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../../../../img//apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../../../../img//apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../../../../img//apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../../../../img//apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../../../../img//android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../../../img//favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../../../../img//favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../../../img//favicon-16x16.png">
<link rel="manifest" href="../../img//manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../../../../img//ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('panel') }}" class="nav-link">Início</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ route('panel.contact') }}" class="nav-link">Contato</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                
              </div>
            </div>
          </form>
        </div>
      </li>

     
    <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Dr João Lucas
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Olá faltam 4 horas para iniciar sua seção...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Horas</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Olá faltam 1 semana para iniciar sua seção...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 1 Sem</p>
              </div>
            </div>
            <!-- Message End -->
         </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Olá faltam 2 dias para iniciar sua seção...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 2 dias</p>
              </div>
            </div>
            <!-- Message End -->
                   </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Ver mais mensagem</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notificações</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 3 nova messagem
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 6 Psicologos com descontos
            <span class="float-right text-muted text-sm">12 horas</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 relatorio de sessão
            <span class="float-right text-muted text-sm">2 dias</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Notificações</a>
        </div>
      </li>
      
      
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('panel') }}" class="brand-link">
        <img src="../../../../img/logo.png"  width=200 height=200 style="">
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <a href="perfil usuario.html">
            <img src="../../dist/img/user8-128x128.jpg" class="img-circle elevation-2" alt="User Image">
            </a>
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
         
          <nav class="nav-item">
            <a href="{{ route('panel') }}" class="nav-link">
              
              <p>
                Painel

              </p>
            </a>
              
              <nav class="nav-item">
                  <a href="{{ route('panel.attendance') }}" class="nav-link">
              
              <p>
                Atendimentos
              </p>
            </a>
            
          </nav>
        <!--  <li class="nav-item">
              <a href="e-commerce.html" class="nav-link">
             
              <p>
                Carteira
                
              </p>
            </a>
            
          </li> -->
         
          
          
          <li class="nav-item">
              <a href="../calendar.html" class="nav-link">
              
              <p>
                Calendário de Sessão
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{ route('panel.contact') }}" class="nav-link">
              
              <p>
                Suporte
              </p>
            </a>
          </li>
          <li  class="nav-item d-none d-sm-inline-block">
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
         
              
      </nav>
      <!-- /.sidebar-menu -->
      
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
         
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Início</a></li>
              <li class="breadcrumb-item active">Psicólogos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    
    
    

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <h2 class="text-center display-4">Pesquise seu Psicólogo</h2>
            <!-- <form action="enhanced-results.html"> -->
            <form action="{!! url('/pesquisar') !!}">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Especialidades ou transtorno</label>
                                    <select name="Especialidades" id="Especialidades" class="select2"  data-placeholder="Any" style="width: 100%;">
                                        <option>Abuso de álcool</option>
                                        <option>Acompanhamento psicológico</option>
                                        <option>Compulsões</option>
                                       <option>Casais</option> 
                                       <option>Infantil</option> 
                                       <option>Psicólogia Tomista</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <select class="select2" style="width: 100%;">
                                        <option selected>AC</option>
                                        <option>AL</option>
                                        <option>AP</option>
                                        <option>AM</option>
                                        <option>BA</option>
                                        <option>CE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Escolha uma data</label>
                                    
                                        <input name="nome" id="nome" type="date" class="form-control" placeholder="Data de nascimento">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <input type="search" class="form-control form-control-lg" placeholder="Digite o nome do Psicólogo(a) ou Cidade" value="">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

      <!-- Default box -->

      <div class="card card-solid">

        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
          @if($users)
          @foreach($users as $user)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                   
                      <h2 class="lead"><b>{{$user->name}}</b></h2>
                     
                      <p class="text-muted text-sm"><b>Sobre: </b> "A terapia ajuda em nos descobrirmos e auxilia no desenvolvimento pessoal em todos os aspectos. 
                          É sempre uma satisfação realizar as sessões.” </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Localização: Cuiabá - MT</li>
                        <li class="small"><span class="fa-li"></span> Sessões : R$ 69,90  -  50min.</li>
                      </ul>
                      </div>

                    <div class="col-5 text-center">
                        <img src="../../dist/img/valeria.jpeg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>


                <div class="card-footer">
                  <div class="text-right">
                   <a href="#" class="btn btn-sm bg-teal">
                      Agendar
                    </a>
                      <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                      <a href="perfil psicologo.html" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Ver perfil
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @endif
            <!-- <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Gabriella Jeremias Soares</b></h2>
                      <p class="text-muted text-sm"><b>Sobre: </b> "Ser psicóloga é cuidar com ética e ser disponível para participar de um incrível processo de transformação.” </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Localização: Cuiabá - MT</li>
                        <li class="small"><span class="fa-li"></span> Sessões : R$ 69,90  -  50min.</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                        <img src="../../dist/img/gabriella.jpeg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                 <div class="card-footer">
                  <div class="text-right">
                   <a href="#" class="btn btn-sm bg-teal">
                      Agendar
                    </a>
                      <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                      <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Ver perfil
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                 
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Lucas Diniz Batista</b></h2>
                      <p class="text-muted text-sm"><b>Sobre: </b> "Possui larga experiência clínica com milhares de atendimentos realizados desde fevereiro de 2005 até os dias atuais.

                          ” </p><br>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Localização: Araxá - MG</li>
                        <li class="small"><span class="fa-li"></span> Sessões : R$ 69,90  -  50min.</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                        <img src="../../dist/img/lucas.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                 <div class="card-footer">
                  <div class="text-right">
                   <a href="#" class="btn btn-sm bg-teal">
                      Agendar
                    </a>
                      <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Ver perfil
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Nicole Pearson</b></h2>
                      <p class="text-muted text-sm"><b>Sobre: </b> "A terapia ajuda em nos descobrirmos e auxilia no desenvolvimento pessoal em todos os aspectos. 
                          É sempre uma satisfação realizar as sessões.” </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Localização: Cuiabá - MT</li>
                        <li class="small"><span class="fa-li"></span> Seções : R$ 59,00  -  50min.</li>
                      </ul>
                    </div>
                      
                      
                      
                    <div class="col-5 text-center">
                      <img src="../../dist/img/user2-160x160.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                   <a href="#" class="btn btn-sm bg-teal">
                      Agendar
                    </a>
                      <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Ver perfil
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Nicole Pearson</b></h2>
                      <p class="text-muted text-sm"><b>Sobre: </b> "A terapia ajuda em nos descobrirmos e auxilia no desenvolvimento pessoal em todos os aspectos. 
                          É sempre uma satisfação realizar as sessões.” </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Localização: Cuiabá - MT</li>
                        <li class="small"><span class="fa-li"></span> Seções : R$ 59,00  -  50min.</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                 <div class="card-footer">
                  <div class="text-right">
                   <a href="#" class="btn btn-sm bg-teal">
                      Agendar
                    </a>
                      <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Ver perfil
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Nicole Pearson</b></h2>
                      <p class="text-muted text-sm"><b>Sobre: </b> "A terapia ajuda em nos descobrirmos e auxilia no desenvolvimento pessoal em todos os aspectos. 
                          É sempre uma satisfação realizar as sessões.” </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Localização: Cuiabá - MT</li>
                        <li class="small"><span class="fa-li"></span> Seções : R$ 59,00  -  50min.</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                   <a href="#" class="btn btn-sm bg-teal">
                      Agendar
                    </a>
                      <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Ver perfil
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Nicole Pearson</b></h2>
                      <p class="text-muted text-sm"><b>Sobre: </b> "A terapia ajuda em nos descobrirmos e auxilia no desenvolvimento pessoal em todos os aspectos. 
                          É sempre uma satisfação realizar as sessões.” </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Localização: Cuiabá - MT</li>
                        <li class="small"><span class="fa-li"></span> Seções : R$ 59,00  -  50min.</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                   <a href="#" class="btn btn-sm bg-teal">
                      Agendar
                    </a>
                      <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Ver perfil
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Nicole Pearson</b></h2>
                      <p class="text-muted text-sm"><b>Sobre: </b> "A terapia ajuda em nos descobrirmos e auxilia no desenvolvimento pessoal em todos os aspectos. 
                          É sempre uma satisfação realizar as sessões.” </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Localização: Cuiabá - MT</li>
                        <li class="small"><span class="fa-li"></span> Seções : R$ 59,00  -  50min.</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                 <div class="card-footer">
                  <div class="text-right">
                   <a href="#" class="btn btn-sm bg-teal">
                      Agendar
                    </a>
                      <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Ver perfil
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Nicole Pearson</b></h2>
                      <p class="text-muted text-sm"><b>Sobre: </b> "A terapia ajuda em nos descobrirmos e auxilia no desenvolvimento pessoal em todos os aspectos. 
                          É sempre uma satisfação realizar as sessões.” </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Localização: Cuiabá - MT</li>
                        <li class="small"><span class="fa-li"></span> Seções : R$ 59,00  -  50min.</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../../dist/img/user2-160x160.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                   <a href="#" class="btn btn-sm bg-teal">
                      Agendar
                    </a>
                      <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Ver perfil
                    </a>
                  </div>
                </div>-->
              </div>
            </div> 
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#">7</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul>
          </nav>
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Versão</b> 1.0
    </div>
    <strong>Direito autoral &copy; 2021 <a href="#">Psiqui</a>.</strong> Todos os direitos reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
