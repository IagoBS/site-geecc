<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="s5E9DCU26rVKPxOLHJnbkJ7susxdYnlZ4WXysJS7">

    <title>Login</title>
    <link rel="apple-touch-icon"
        href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/images/favicon/apple-touch-icon-152x152.png">



    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/vendors/vendors.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/css/themes/vertical-menu-nav-dark-template/materialize.css">
    <link rel="stylesheet" type="text/css"
        href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/css/themes/vertical-menu-nav-dark-template/style.css">


    <link rel="stylesheet" type="text/css"
        href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/css/pages/login.css">


    <link rel="stylesheet" type="text/css"
        href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/css/laravel-custom.css">
    <link rel="stylesheet" type="text/css"
        href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/css/custom/custom.css">

</head>


<body>
    <div class="row">

        <div class="col s12">
            <div class="container">
                <div id="login-page" class="row">
                    <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                        @if ($errors->any())
                        <div class="card-content red-text center">
                            <ul>
                            @foreach ($errors->all() as $error )
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="login-form" action="{{route('login.store')}}" id="form" method="POST">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <h5 class="ml-4 center">Login</h5>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2 ">person_outline</i>
                                    <input id="email" name="email" type="text">
                                    <label for="email" class="center-align">Email</label>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">lock_outline</i>
                                    <input id="password" name="password" type="password">
                                    <label for="password">Senha</label>
                                </div>
                            </div>

                        </form>
                        <div class="row">
                            <div class="input-field col s12">
                                <button form="form" type="submit"
                                    class="btn  waves-effect waves-light border-round gradient-45deg-blue-deep-orange col s12">Login</button>
                            </div>
                        </div>
                        <div class="row">

                            <div class="input-field col s6 m6 l6">
                                <p class=""><a href="{{url('/recuperar')}}">Esqueceu a senha?</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-overlay"></div>
        </div>
    </div>




</body>

</html>
