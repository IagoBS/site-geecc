<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> @stack('styles')
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <img src="{{asset('imagens/geec.png')}}" alt="Geec" class="img-fluid">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="p-2 bd-highlight">

            </div>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Quem<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contato <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarInstitutos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Institutos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarInstitutos">
                        <a class="dropdown-item" href="#"></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarFaleConosco" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Fale Conosco
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarFaleConosco">
                        <a class="dropdown-item" href="#"></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarArticulistas" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Articulistas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarArticulistas">
                        <a class="dropdown-item" href="#"></a>
                    </div>
                </li>
                @guest
                  <span></span>
                     @else
                     <li class="nav-item">
                         <a href="" class="nav-link">DashBoard</a>
                     </li>
                     <li class="nav-item">
                     <a href="{{route('login.logout')}}" class="nav-link">Logout</a>
                     </li>
                @endguest
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>

    </nav>
            
    <div class="container">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    @stack('scripts')
</body>

</html>
