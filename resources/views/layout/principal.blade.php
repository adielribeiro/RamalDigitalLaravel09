<html>
    <head>

        @vite(['resources/js/app.js'])
        <link href="/css/custom.css" rel="stylesheet">
        <title>Ramais</title>

    </head>

    <body>

        <div class="container">

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/ramais">
                            Lista de ramais
                        </a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/ramais">Lista de ramais</a></li>
                        <li><a href="/ramais/novo">Cadastrar Ramal</a></li>
                    </ul>
                </div>

            </nav>

            <div class="container">
                @yield('conteudo')
            </div>

            <footer class="footer">
                <p>Lista de ramais</p>
            </footer>

        </div>

    </body>
</html>
