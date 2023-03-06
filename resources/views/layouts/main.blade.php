<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a href="{{Route('index')}}" class="text-decoration-none text-white btn btn-primary">Inicio</a>
                    <a href="{{Route('create')}}" class="text-decoration-none text-white btn btn-primary">Cadastrar</a>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer>
            <div class="fixed-bottom bg-dark text-center ">
                <p class="text-white mt-3"><a href="https://www.instagram.com/ei_vinix/" target="_blank" class="text-white text-decoration-none">Vinícius Peres</a> &copy 2023</p>
            </div>
        </footer>
    </body>
</html>