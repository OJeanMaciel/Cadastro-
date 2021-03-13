<?php 
include_once "../bd/conexao.php";
?>
<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/styled.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css">
        
        <title>Página de Consultas</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-ligth" style="background-color: #00BFFF" >
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Ir para Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.php">Faça o Cadastro</a>
                    </li>
                </ul>
            </div>
            <div >                
                <a class="nav-link" href="sobre.php">Sobre Nós</a>                
            </div>
        </nav>
        <h1>Consulta de pacientes</h1>
        <form method="POST" action="consulta.php">
            <label>Nome: </label>
            <input type="text" name="nome" placeholder="Digite o nome completo:"><br><br>
            <p class="botao">
            <input name="sendPesqUser" type="submit" value="Consultar">
            </p>
        </form><br><br>
    </body>

</html>