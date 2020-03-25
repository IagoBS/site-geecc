<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <style>
        .darkens li {
            color: black
        }

        main {
            min-height: calc(100vh - 100px - 180px);
        }
        .colorindo li > a {
    font-family: Arial, Helvetica, sans-serif;
    color: #e0f7fa ;
}
    </style>

    <title>@yield('title')</title>
</head>

<body>
    <div class="navbar">
        <nav class="blue darken-1">
            <div class="nav-wrapper container">
                <a href="" class="brand-logo left"><img src="{{asset('imagens/geec.png')}}" alt=""> </a>

                <ul id="nav-itens" class="right hide-on-med-and-down">

                    <li><a href="">Home</a></li>
                    <li><a href="">Quem somos</a></li>
                    <li><a href="">Contato</a></li>
                    <li>
                        <a href="#" class="dropdown-trigger" data-target="dropdown-menu">
                                Articulistas<i class="material-icons right">arrow_drop_down</i>
                            </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-trigger" data-target="institutos">
                                Institutos <i class="material-icons right">arrow_drop_down</i>
                            </a>
                    </li>
                    @auth
                    <li>
                        <a href="{{url('/dashboard')}}" class="nav-itens">
                        Dashboard
                        </a>
                    </li>
                    <li>

                    <a href="{{route('usuario.show', auth()->user()->id)}}">Perfil</a>
                    </li>
                    <li>
                    <a href="{{route('login.logout')}}">Logout</a>
                    </li>
                    @endauth
                </ul>

                <ul id="dropdown-menu" class="dropdown-content">

                </ul>

                <ul id="institutos" class="dropdown-content">

                </ul>
            </div>
        </nav>
    </div>



    <main>
        @yield('content')
    </main>

    <footer class="page-footer footer_cle black-text blue">
        <div class="container">
            <div class="row">
                <div class="col xl3 l3 m6 s6">
                    <p><strong>Mapa do Site</strong></p>
                    <ul class="colorindo">
                        <li ><a href="https://www.clubeespirita.com.br/" >Home</a></li>
                        <li><a href="https://www.clubeespirita.com.br/funcionamento">Quem Somos</a></li>
                        <li><a href="">Contato</a></li>



                    </ul>
                </div>

                <div class="col xl4 l4 m6 s6">
                    <p><strong></strong></p>
                    <ul>
                        <li><a href="https://www.clubeespirita.com.br/termos">Termos
                                    de Serviço</a></li>
                        <li><a href="https://www.clubeespirita.com.br/termos/politica">Política
                                    de Privacidade e Segurança</a></li>
                        <li><a href="https://www.clubeespirita.com.br/termos/promocoes">Regulamento
                                    das Promoções</a></li>
                    </ul>

                </div>

                <div class="col xl5 l5 m6 s12">
                    <span><strong>Grupo de Educação, Ética e Cidadania</strong>
                    </span>
                    <p>(37) 3222-7644 /
                            geec@geec.org.br</p><span>Av. 21 de Abril,
                            1590 - Santa Clara,
                            Divinópolis - MG,
                            35500-070</span>

                    <p><strong>Redes Sociais</strong></p>
                    <a href="https://www.facebook.com/Centro.Cultural.Livros/" target="_blank">
                        <i class="fa fa-facebook-square redes_sociais fa-4x" aria-hidden="true"></i>
                    </a>
                </div>

            </div>
        </div>

    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-trigger');
            var instances = M.Dropdown.init(elems, {
                coverTrigger: false
            });
        });
        CKEDITOR.replace( 'message' );
    </script>

</body>

</html>
