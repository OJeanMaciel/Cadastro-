<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./styled.css">
        <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
        
        <title>Form de exemplo com checkboxes</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-ligth" style="background-color: #00BFFF">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.php">Faça o Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pesquisa.php">Faça a Pesquisa</a>
                    </li>
                </ul>
            </div>
            <div >                
                <a class="nav-link" href="sobre.php">Sobre Nós</a>                
            </div>
        </nav>

        <form method="POST" action="processa.php">
            <input type="radio" names="sintoma" value="bom">Gripe
            <input type="radio" names="sintoma" value="regular">Febre
            <input type="radio" names="sintoma" value="ruim">Perda de Olfato
            <input type="radio" names="sintoma" value="regular">Perda de Paladar
            <input type="radio" names="sintoma" value="ruim">Tosse Seca

            <p class="botao" >
                <input type="submit" value="Cadastrar">
            </p>
        </form>
    </body>
</html>