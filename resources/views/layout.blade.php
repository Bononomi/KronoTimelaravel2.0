<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>KronoTime</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('/')}}/images/favicon.png">
        <!-- Pignose Calender -->
        <link href="{{url('/')}}/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
        <!-- Chartist -->
        <link rel="stylesheet" href="{{url('/')}}/plugins/chartist/css/chartist.min.css">
        <link rel="stylesheet" href="{{url('/')}}/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
        <!-- Custom Stylesheet -->
        <link href="{{url('/')}}/css/style.css" rel="stylesheet">

    </head>

    <body>

        <!--*******************
            Preloader start
        ********************-->
        <div id="preloader">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
        <!--*******************
            Preloader end
        ********************-->


        <!--**********************************
            Main wrapper start
        ***********************************-->
        <div id="main-wrapper">

            <!--**********************************
                Nav header start
            ***********************************-->
            <div class="nav-header">
                <div class="brand-logo">
                    <a href="index.html">



                    </a>
                </div>
            </div>
            <!--**********************************
                Nav header end
            ***********************************-->

            <!--**********************************
                Header start
            ***********************************-->
            <div class="header">    
                <div class="header-content clearfix">

                    <div class="nav-control">
                        <div class="hamburger">
                            <span class="toggle-icon"><i class="icon-menu"></i></span>
                        </div>
                    </div>
                    <div class="header-left">

                    </div>
                    <div class="header-right">
                        <ul class="clearfix">



                            <li class="icons dropdown">
                                <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                    <span class="activity active"></span>
                                    <img src="images/user/1.png" height="40" width="40" alt="">
                                </div>
                                <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="usuario.html"><i class="icon-user"></i> <span>Profile</span></a>
                                            </li>


                                            <hr class="my-2">

                                            <li><a href="page-login.html"><i class="icon-key"></i> <span>Sair</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--**********************************
                Header end ti-comment-alt
            ***********************************-->

            <!--**********************************
                Sidebar start
            ***********************************-->
            <div class="nk-sidebar">          
                <div class="nk-nav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="nav-label">Menu Principal</li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{url('/')}}">Dashboard</a></li>
                                <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                            </ul>
                        </li>
                        <li class="mega-menu mega-menu-sm">
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-bag menu-icon"></i><span class="nav-text">Produtos</span>
                            </a>
                            <ul aria-expanded="false">
                               
                                <li><a href="{{url('/')}}/produto">Listar</a></li>
                               <li><a href="./produto.html">Cadastrar</a></li>
                               
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-book-open menu-icon"></i> <span class="nav-text">Operações</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="./listagemoperacao.html">Listar</a></li>
                                <li><a href="./novaoperacao.html">Nova Operação</a></li>
                                 <li><a href="./tomadatempo.html">Tomada de Tempo</a></li>
        
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-docs menu-icon"></i><span class="nav-text">Relatórios</span>
                            </a>
                            <ul aria-expanded="false">

                                <li><a href="./listarrelatorio.html">Listar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-user menu-icon"></i><span class="nav-text">Usuário</span>
                            </a>
                            <ul aria-expanded="false">

                                <li><a href="./usuario.html">Profile</a></li>
                                <li><a href="./cadastrarusuario.html">Cadastrar</a></li>
                            </ul>
                        </li>



                </div>
            </div>
            <!--**********************************
                Sidebar end
            ***********************************-->

            <!--**********************************
                Content body start
            ***********************************-->
            <div class="content-body">

                <div class="container-fluid mt-3">
                   
                     <!-- #/ Conteúdo da DASHBOARD -->
                     
                     @yield('conteudo')

                </div>
                <!-- #/ container -->
            </div>
            <!--**********************************
                Content body end
            ***********************************-->


            <!--**********************************
                Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">KronoTime</a> 2019</p>
                </div>
            </div>
            <!--**********************************
                Footer end
            ***********************************-->
        </div>
        <!--**********************************
            Main wrapper end
        ***********************************-->

        <!--**********************************
            Scripts
        ***********************************-->
        <script src="{{url('/')}}/plugins/common/common.min.js"></script>
        <script src="{{url('/')}}/js/custom.min.js"></script>
        <script src="{{url('/')}}/js/settings.js"></script>
        <script src="{{url('/')}}/js/gleek.js"></script>
        <script src="{{url('/')}}/js/styleSwitcher.js"></script>

        <!-- Chartjs -->
        <script src="{{url('/')}}/plugins/chart.js/Chart.bundle.min.js"></script>
        <!-- Circle progress -->
        <script src="{{url('/')}}/plugins/circle-progress/circle-progress.min.js"></script>
        <!-- Datamap -->
        <script src="{{url('/')}}/plugins/d3v3/index.js"></script>
        <script src="{{url('/')}}/plugins/topojson/topojson.min.js"></script>
        <script src="{{url('/')}}/plugins/datamaps/datamaps.world.min.js"></script>
        <!-- Morrisjs -->
        <script src="{{url('/')}}/plugins/raphael/raphael.min.js"></script>
        <script src="{{url('/')}}/plugins/morris/morris.min.js"></script>
        <!-- Pignose Calender -->
        <script src="{{url('/')}}/plugins/moment/moment.min.js"></script>
        <script src="{{url('/')}}/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
        <!-- ChartistJS -->
        <script src="{{url('/')}}/plugins/chartist/js/chartist.min.js"></script>
        <script src="{{url('/')}}/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



        <script src="{{url('/')}}/js/dashboard/dashboard-1.js"></script>

    </body>

</html>
