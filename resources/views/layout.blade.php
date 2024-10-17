<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sistema de Gerenciamento de Eventos Online</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: sans-serif;
            margin: 0; /* Remove margens padrão */
            padding: 0; /* Remove padding padrão */
            font-size: 20px;

        }

        header {
            background-color: #007bff;
            position: absolute; /* Permite posicionar o header no canto */
            top: 0;
            left: 0;

        }

        .navbar-brand, .nav-link {
            color: white;
        }

        .nav-link.active {
     font-size: 20px;

        }



        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 1rem 0;
        }

        main {
            padding: 2rem;
        }
    </style>
</head>

<body>

<header>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cidades</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home-cidade') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('show-cadastro-cidade') }}">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lista-cidade') }}">Gerenciar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
