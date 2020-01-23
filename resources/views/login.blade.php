
<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Acompanha Preço - Seu portal de preços online!</title>

    <!-- Favicons-->
    <link rel="icon" href="http://demo.geekslabs.com/materialize-v1.0/images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="http://demo.geekslabs.com/materialize-v1.0/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->

    <link href="http://demo.geekslabs.com/materialize-v1.0/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://demo.geekslabs.com/materialize-v1.0/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="http://demo.geekslabs.com/materialize-v1.0/css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://demo.geekslabs.com/materialize-v1.0/css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="http://demo.geekslabs.com/materialize-v1.0/js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://demo.geekslabs.com/materialize-v1.0/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://pixinvent.com/materialize-material-design-admin-template/vendors/sweetalert/dist/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body style="background-color: #707977">
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->


<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        <form class="login-form">
            <div class="row">
                <div class="input-field col s12 center">
                    <br>
                    <img src="{{URL::asset('images/logo-acompanhapreco1.png')}}" alt="" class="responsive-img valign">
                    <img src="{{URL::asset('images/logo-acompanhapreco2.png')}}" alt="" class="responsive-img valign">
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <input id="login-input-email" type="text">
                    <label for="login-input-email" class="center-align">Email</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <input id="login-input-senha" type="password">
                    <label for="login-input-senha">Senha</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l12  login-text">
                    <input type="checkbox" id="login-checkbox-lembrarme" />
                    <label for="login-checkbox-lembrarme">Lembrar-me</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <a href="#!" class="btn waves-effect waves-light col s12 cyan" onclick="efetuaLogin()">Entrar</a>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s5 m5 l5">
                    <p class="margin medium-small"><a href="#!" onclick="openPageRegister()">Registrar-se!</a></p>
                </div>
                <div class="input-field col s7 m7 l7">
                    <p class="margin right-align medium-small"><a href="#!" onclick="openPageSendPassword()">Esqueci minha senha!</a></p>
                </div>
            </div>

        </form>
    </div>
</div>

<div id="register-user-page" class="row" style="display: none">
    <div class="col s12 z-depth-4 card-panel">
        <form class="login-form">
            <div class="row">
                <div class="input-field col s12 center">
                    <br>
                    <img src="{{URL::asset('images/logo-acompanhapreco1.png')}}" alt="" class="responsive-img valign">
                    <img src="{{URL::asset('images/logo-acompanhapreco2.png')}}" alt="" class="responsive-img valign">
                </div>
            </div>



            <div class="row margin">
                <div class="input-field col s12">
                    <input id="registerName" type="text">
                    <label for="registerName">Nome</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <input id="registerUser" type="text">
                    <label for="registerUser">Usuário</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <input id="registerPass" type="password">
                    <label for="registerPass">Senha</label>
                </div>
            </div>



            <div class="row">
                <div class="input-field col s6">
                    <a href="#!" class="btn waves-effect waves-light col s12 cyan" onclick="voltaLogin()">Voltar</a>
                </div>
                <div class="input-field col s6">
                    <a href="#!" class="btn waves-effect waves-light col s12 cyan" onclick="registraUsuario()">Registrar</a>
                </div>
            </div>


        </form>
    </div>
</div>

<div id="send-password-page" class="row" style="display: none">
    <div class="col s12 z-depth-4 card-panel">
        <form class="login-form">
            <div class="row">
                <div class="input-field col s12 center">
                    <br>
                    <img src="{{URL::asset('images/logo-acompanhapreco1.png')}}" alt="" class="responsive-img valign">
                    <img src="{{URL::asset('images/logo-acompanhapreco2.png')}}" alt="" class="responsive-img valign">
                    <p class="center login-form-text">Preencha seu email para receber a senha</p>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <input id="email" type="email">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <a href="#!" class="btn waves-effect waves-light col s12 cyan" onclick="voltaLogin()">Voltar</a>
                </div>
                <div class="input-field col s6">
                    <a href="#!" class="btn waves-effect waves-light col s12 cyan" onclick="enviaSenhaEsquecida()">Enviar</a>
                </div>
            </div>


        </form>
    </div>
</div>


<!-- ================================================
  Scripts
  ================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="http://demo.geekslabs.com/materialize-v1.0/js/plugins/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="http://demo.geekslabs.com/materialize-v1.0/js/materialize.min.js"></script>
<!--prism-->
<script type="text/javascript" src="http://demo.geekslabs.com/materialize-v1.0/js/plugins/prism/prism.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="http://demo.geekslabs.com/materialize-v1.0/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<script type="text/javascript" src="https://pixinvent.com/materialize-material-design-admin-template/vendors/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="https://pixinvent.com/materialize-material-design-admin-template/js/scripts/extra-components-sweetalert.js"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="http://demo.geekslabs.com/materialize-v1.0/js/plugins.min.js"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="http://demo.geekslabs.com/materialize-v1.0/js/custom-script.js"></script>

<script src="{{ URL::asset('js/login.js') }}"></script>

@if(isset($_GET['status']) && $_GET['status'] == 0)
    <script>
        swal("Usuário não logado!")
    </script>
@elseif(isset($_GET['status']) && $_GET['status'] == 2)
    <script>
        swal("Usuário não existe!")
    </script>
@endif

</body>

</html>
