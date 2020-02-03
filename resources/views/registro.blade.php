<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .group {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-end;
            justify-content: space-around;
        }
    </style>
    <title>Registro</title>
</head>

<body>
    <div class="container">

        <div class="flex justify-content-center h-100">
            <div class="card">
                <div class="card-group card-header text-center">
                </div>
                <h3 class="text-center ">Criar conta</h3>

                <form action="{{route('registro.store')}}" id="form" method="POST" class="form-group">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-secondary">
                        @foreach ($errors->all() as $error )
                        <ul>
                            <li>{{$error}}</li>
                        </ul>
                        @endforeach
                        @endif
                    </div>
                    <label for="name" class="text-center">Nome</label>
                    <div class="input-group-lg mb-3">
                        <input type="text" name="name" id="name" class="form-control i" placeholder="Escreva seu nome">
                    </div>


                    <div class="input-group-lg form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Escreva o seu email">
                    </div>
                    <div class="input-group-lg form-group">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Escreva o sua senha">
                    </div>

                </form>
                <button type="submit" form="form" class="btn btn-primary" class="group">Cadastrar</button>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
