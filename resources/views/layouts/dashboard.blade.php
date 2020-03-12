<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
            user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="Qrg0QCN2CXrUbdipEKAOELkLWd9w2aQXgYRXMJUX">

    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/images/favicon/apple-touch-icon-152x152.png">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/vendors/vendors.min.css">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/vendors/chartist-js/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/vendors/chartist-js/chartist-plugin-tooltip.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/css/themes/vertical-menu-nav-dark-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/css/themes/vertical-menu-nav-dark-template/style.css">
    <link rel="stylesheet" type="text/css" href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/css/pages/dashboard-modern.css">
    <link rel="stylesheet" type="text/css" href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/css/pages/intro.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/css/laravel-custom.css">
    <link rel="stylesheet" type="text/css" href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/css/custom/custom.css">
    <!-- END: Custom CSS-->
    <style type="text/css">
        /* Chart.js */

        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }
            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }
    </style>
</head>
<!-- END: Head-->


<body class="vertical-layout page-header-light vertical-menu-collapsible
        vertical-menu-nav-dark 2-columns" data-open="click" data-menu="vertical-modern-menu" data-col="2-columns" style="">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav class="navbar-main navbar-color nav-collapsible
                    sideNav-lock gradient-shadow navbar-dark
                    blue">
                <div class="nav-wrapper">
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <ul class="search-list collection display-none ps">
                            <div class="ps__rail-x" style="left: 0px;
                                    bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; right:
                                    0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                            </div>
                        </ul>
                    </div>
                    <ul class="navbar-list right">



                    </ul>


                </div>
                <nav class="display-none search-sm" style="display: none;">
                    <div class="nav-wrapper">
                        <form id="navbarForm">
                            <div class="input-field search-input-sm">
                                <input class="search-box-sm mb-0" type="search" required="" placeholder="Explore Materialize" id="search" data-search="template-list">
                                <label class="label-icon active" for="search">
                                        <i class="material-icons
                                            search-sm-icon">search</i>
                                    </label>
                                <i class="material-icons search-sm-close">close</i>
                                <ul class="search-list collection
                                        search-list-sm display-none ps">
                                    <div class="ps__rail-x" style="left:
                                            0px; bottom: 0px;">
                                        <div class="ps__thumb-x" tabindex="0" style="left: 0px;
                                                width: 0px;"></div>
                                    </div>
                                    <div class="ps__rail-y" style="top: 0px;
                                            right: 0px;">
                                        <div class="ps__thumb-y" tabindex="0" style="top: 0px;
                                                height: 0px;"></div>
                                    </div>
                                </ul>
                            </div>
                        </form>
                    </div>
                </nav>
            </nav>
        </div>
        <!-- search ul  -->
        <ul class="display-none" id="default-search-main">
            <li class="auto-suggestion-title">
                <a class="collection-item" href="#">
                    <h6 class="search-title">FILES</h6>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="collection-item" href="#">
                    <div class="display-flex">
                        <div class="display-flex align-item-center
                                flex-grow-1">
                            <div class="avatar">
                                <img src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/images/icon/pdf-image.png" width="24" height="30" alt="sample
                                        image">
                            </div>
                            <div class="member-info display-flex
                                    flex-column">
                                <span class="black-text">
                                        Two new item submitted</span>
                                <small class="grey-text">Marketing Manager</small>
                            </div>
                        </div>
                        <div class="status"><small class="grey-text">17kb</small></div>
                    </div>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="collection-item" href="#">
                    <div class="display-flex">
                        <div class="display-flex align-item-center
                                flex-grow-1">
                            <div class="avatar">
                                <img src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/images/icon/doc-image.png" width="24" height="30" alt="sample
                                        image">
                            </div>
                            <div class="member-info display-flex
                                    flex-column">
                                <span class="black-text">52 Doc file
                                        Generator</span>
                                <small class="grey-text">FontEnd Developer</small>
                            </div>
                        </div>
                        <div class="status"><small class="grey-text">550kb</small></div>
                    </div>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="collection-item" href="#">
                    <div class="display-flex">
                        <div class="display-flex align-item-center
                                flex-grow-1">
                            <div class="avatar">
                                <img src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/images/icon/xls-image.png" width="24" height="30" alt="sample
                                        image">
                            </div>
                            <div class="member-info display-flex
                                    flex-column">
                                <span class="black-text">25 Xls File
                                        Uploaded</span>
                                <small class="grey-text">Digital Marketing
                                        Manager</small>
                            </div>
                        </div>
                        <div class="status"><small class="grey-text">20kb</small></div>
                    </div>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="collection-item" href="#">
                    <div class="display-flex">
                        <div class="display-flex align-item-center
                                flex-grow-1">
                            <div class="avatar">
                                <img src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/images/icon/jpg-image.png" width="24" height="30" alt="sample
                                        image">
                            </div>
                            <div class="member-info display-flex
                                    flex-column">
                                <span class="black-text">Anna Strong</span>
                                <small class="grey-text">Web Designer</small>
                            </div>
                        </div>
                        <div class="status"><small class="grey-text">37kb</small></div>
                    </div>
                </a>
            </li>
            <li class="auto-suggestion-title">
                <a class="collection-item" href="#">
                    <h6 class="search-title">MEMBERS</h6>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="collection-item" href="#">
                    <div class="display-flex">
                        <div class="display-flex align-item-center
                                flex-grow-1">
                            <div class="avatar">
                                <img class="circle" src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/images/avatar/avatar-7.png" width="30" alt="sample image"></div>
                            <div class="member-info display-flex
                                    flex-column">
                                <span class="black-text">John Doe</span>
                                <small class="grey-text">UI designer</small>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="collection-item" href="#">
                    <div class="display-flex">
                        <div class="display-flex align-item-center
                                flex-grow-1">
                            <div class="avatar">
                                <img class="circle" src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/images/avatar/avatar-8.png" width="30" alt="sample image">
                            </div>
                            <div class="member-info display-flex
                                    flex-column">
                                <span class="black-text">Michal Clark</span>
                                <small class="grey-text">FontEnd Developer</small>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="collection-item" href="#">
                    <div class="display-flex">
                        <div class="display-flex align-item-center
                                flex-grow-1">
                            <div class="avatar">
                                <img class="circle" src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/images/avatar/avatar-10.png" width="30" alt="sample image">
                            </div>
                            <div class="member-info display-flex
                                    flex-column">
                                <span class="black-text">Milena Gibson</span>
                                <small class="grey-text">Digital Marketing</small>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="collection-item" href="#">
                    <div class="display-flex">
                        <div class="display-flex align-item-center
                                flex-grow-1">
                            <div class="avatar">
                                <img class="circle" src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/images/avatar/avatar-12.png" width="30" alt="sample image">
                            </div>
                            <div class="member-info display-flex
                                    flex-column">
                                <span class="black-text">Anna Strong</span>
                                <small class="grey-text">Web Designer</small>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
        <ul class="display-none" id="page-search-title">
            <li class="auto-suggestion-title">
                <a class="collection-item" href="#">
                    <h6 class="search-title">PAGES</h6>
                </a>
            </li>
        </ul>
        <ul class="display-none" id="search-not-found">
            <li class="auto-suggestion">
                <a class="collection-item display-flex align-items-center" href="#">
                    <span class="material-icons">error_outline</span>
                    <span class="member-info">No results found.</span>
                </a>
            </li>
        </ul>
    </header>

 <aside class="sidenav-main nav-expanded nav-lock nav-collapsible blue  sidenav-gradient   sidenav-active-rounded  sidenav-dark">
        <div class="brand-sidebar">
            <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="{{url('/')}}">
                    <img src="{{asset('imagens/geec.png')}}" alt="">
                    <span class="logo-text hide-on-med-and-down">
                            GEEC
                        </span>
                </a>
                <a class="navbar-toggler" href="javascript:void(0)"><i
                            class="material-icons">radio_button_checked</i></a></h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation
                collapsible sidenav-fixed menu-shadow ps ps--active-y" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion" style="transform:
                translateX(0px);">

            <li class="bold active open">
                <a class="collapsible-header waves-effect waves-cyan" href="javascript:void(0)" tabindex="0">
                    <i class="material-icons">settings_input_svideo</i>
                    <span class="menu-title" data-i18n="Dashboard">Home</span>

                    <span class="badge pill orange float-right mr-10">3</span>
                </a>
                <div class="collapsible-body" style="display: block;">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                        <li class="active">
                            <a href="{{url('/institucional')}}" class="">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Modern">Quem somos</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="{{url('/contato')}}" class="">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="eCommerce">Contato</span>
                            </a>
                        </li>
                        <li>
                        <a href="{{url('/contato/listar')}}" class="">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span>Lista de contatos</span>
                        </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan" href="javascript:void(0)" tabindex="0">
                    <i class="material-icons">dvr</i>
                    <span class="menu-title" data-i18n="Templates">Perfil</span>
                </a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                        <li class="">


                                <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                                    <li class="">
                                    <a href="{{url('/registro')}}" class="">
                                            <i class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Modern Menu">Registrar usuário</span>
                                        </a>
                                    </li>

                                    <li class="">
                                    <a href="{{url('/usuario/' . '1' . '/edit')}}" class="">
                                            <i class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Navbar Dark">Editar perfil</span>
                                        </a>
                                    </li>

                                    <li class="">
                                    <a href="" class="">
                                            <i class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Gradient Menu">Excluir usuário</span>
                                        </a>
                                    </li>


                                </ul>

                        </li>

                        <li class="">

                            <div class="collapsible-body">
                                <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                                    <li class="">
                                        <a href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-5/" class="">
                                            <i class="material-icons">radio_button_unchecked</i>
                                            <span data-i18n="Horizontal
                                                    Menu">Horizontal Menu</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header">
                <a class="navigation-header-text">Administrativo</a>
                <i class="navigation-header-icon material-icons">more_horiz</i>
            </li>

            <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan" href="javascript:void(0)" tabindex="0">
                    <i class="material-icons">receipt</i>
                    <span class="menu-title" data-i18n="Invoice">Notícia</span>
                </a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                        <li class="">
                        <a href="{{url('/news')}}" class="">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Invoice List">Criar notícia</span>
                            </a>
                        </li>

                        <li class="">
                        <a href="{{url('news/lista')}}" class="">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Invoice View">Listar notícias</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan" href="javascript:void(0)" tabindex="0">
                    <i class="material-icons">add_circle</i>
                    <span class="menu-title" data-i18n="eCommerce">Institutos</span>
                </a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                        <li class="">
                        <a href="{{route('institutos.create')}}" class="">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Products Page">Criar Instituto</span>
                            </a>
                        </li>

                        <li class="">
                        <a href="{{route('list.institute')}}" class="">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Pricing">Lista Institutos</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan" href="javascript:void(0)" tabindex="0">
                    <i class="material-icons">content_paste</i>
                    <span class="menu-title" data-i18n="Pages">Projetos</span>
                </a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">



                        <li class="">
                        <a href="{{url('/projetos/create')}}" class="">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Account Settings">Criar projeto</span>
                            </a>
                        </li>

                        <li class="">
                        <a href="{{url('projetos/lista')}}" class="">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Page Blank">Listar Projetos</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>






            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px;
                        width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 966px; right:
                    0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px;
                        height: 518px;"></div>
            </div>
        </ul>
        <div class="navigation-background"></div>
        <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium
                waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">

            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        @yield('dashboard')
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/vendors/chartjs/chart.min.js"></script>
    <script src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/vendors/chartist-js/chartist.min.js"></script>
    <script src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/vendors/chartist-js/chartist-plugin-tooltip.js"></script>
    <script src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/vendors/chartist-js/chartist-plugin-fill-donut.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/js/plugins.js"></script>
    <script src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/js/search.js"></script>
    <script src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/js/custom/custom-script.js"></script>
    <script src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/js/scripts/customizer.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/js/scripts/dashboard-modern.js"></script>
    <script src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/js/scripts/intro.js"></script>
    <div class="chartist-tooltip current-balance-tooltip"></div>
    <div class="chartist-tooltip total-transaction-tooltip" style="top:
            380px; left: 1392px;"></div>
    <div class="chartist-tooltip user-statistics-tooltip"></div>
    <div class="chartist-tooltip user-statistics-tooltip"></div>
    <div class="material-tooltip">
        <div class="tooltip-content"></div>
    </div>
    <div class="sidenav-overlay" style="display: none;"></div>
    <div class="drag-target"></div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target right-aligned"></div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target right-aligned"></div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target right-aligned"></div>
</body>

</html>

