
<!DOCTYPE html>
<html lang="pt-br">
<head>

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
        <link rel="stylesheet" type="text/css" src="{{ URL::asset('css/vendors.min.css') }}">
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

    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <title>Psiqui | Login</title>
  <style>
    body{background-color:#001621 !important;}
</style> 
<!-- login page start -->
<section id="auth-login" class="row flexbox-container" >
    <div class="col-xl-10 col-11">
        <div class="card bg-authentication mb-0">
            <div class="row m-0">
                <!-- left section-login -->
                <div class="col-md-6 col-12 px-0">
                    <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                        <div class="card-header pb-1">
                            <div class="card-title">
                                <h4 class="text-center mb-2">BEM-VINDO </h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">

                                <div class="divider">

                                    <div class="divider-text text-uppercase text-muted"><small> Entrar dashboard </small>

                                    </div>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf





                                    <div class="form-group mb-50">
                                        <label id="email" type="email" class="text-bold-600" for="exampleInputEmail1">Usuário</label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Usuário"></div>
                                        <div class="form-group">
                                            <label id="password" type="password" class="text-bold-600" for="exampleInputPassword1">Senha</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
                                        </div>
                                        <div class="form-group d-flex flex-md-row flex-column justify-content-between align-items-center">
                                            <div class="text-left">
                                                <div class="checkbox checkbox-sm">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="checkboxsmall" for="exampleCheck1"><small>Mantenha-me conectado</small></label>
                                                </div>
                                            </div>
                                            <div class="text-right"><a href="#" class="card-link"><small>Esqueceu a senha?</small></a></div>
                                        </div>


                                        <button type="submit" class="btn btn-primary glow w-100 position-relative" id="login_btn">Entrar<i id="icon-arrow " class="bx bx-right-arrow-alt"></i>
                                          {{ __('Login') }}     
                                      </button>


                                  </form>
                                  <hr>
                                  <div id="loading"></div>
                                  <!-- <div class="text-center"><small class="mr-25">Don't have an account?</small><a href="auth-register.html"><small>Sign up</small></a></div> -->
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- right section image -->
                  <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                    <div class="card-content">
                        <img class="img-fluid" src="{{ URL::asset('images/logo/logo-full.png') }}" alt="Agência Staff">
                        <!-- <link rel="stylesheet" href="{{ URL::asset('dist/css/adminlte.min.css') }}"> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login page ends -->

</body>
</html>