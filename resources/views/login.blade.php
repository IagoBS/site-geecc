<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
    <style>
        .login {
            background-color: white;
            width: 350px;
            height: 120px;
            left: 50%;
            margin: -170px 0 0 -210px;
            padding: 10px;
            position: absolute;
            top: 50%;
        }

        .butao {
            margin: auto margin-bottom: 25px;
        }

        .label {
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .butao {
            width: 330px;
            border: 4px;
            height: 30px;
            color: white;
            margin: 4px;
        }

        body {
            background-color: white;
        }
        .link {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
        .esqueceu {
            display: flex;
            flex-direction: column-reverse;
            align-items: center;
        }
        main {
            min-height: calc(100vh - 100px - 180px);
        }
    </style>
</head>

<body>
    <main class="main">
        <div class="container">
            <div class="form">
            <div class="login">
                @if ($errors->any())
                <div class="alert alert-secondary">
                    @foreach ($errors->all() as $error )
                    <ul>
                        <li>{{$error}}</li>
                    </ul>
                    @endforeach
                </div>
                @endif
                <form action="{{route('login.store')}}" id="login" method="POST" class="form-group">
                    @csrf
                    <div class="row">
                        <div class="col col-sm-12 col-mb-6">
                            <label for="email" class="label">Email</label>
                            <input type="text" name="email" id="email" class="form-control" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-12 col-mb-6">
                            <label for="password" class="label">Senha</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary butao" form="login">Logar</button>
                    <a href="#" class="link">Não possui conta?</a>
                    <a href="#" class="esqueceu">Esqueceu a senha?</a>
                </form>

                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
