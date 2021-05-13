<?php 
session_start();
include_once("../bd/conexao.php");
?>
<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/styled.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css">
        
        <script type="text/javascript">
        function formatar_mascara(src, mascara) {
        var campo = src.value.length;
        var saida = mascara.substring(0,1);
        var texto = mascara.substring(campo);
        if(texto.substring(0,1) != saida) {
        src.value += texto.substring(0,1);
        }
        }
        </script>

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
                    <li class="nav-item">
                        <a class="nav-link" href="./teste.php">Faça o Teste</a>
                    </li>
                </ul>
            </div>
            <div >                
                <a class="nav-link" href="sobre.php">Sobre Nós</a>                
            </div>
        </nav>
        <h1>Consultas:</h1>     

        <form class="pesquisa" method="POST" action="../controller/consultaagen.php">
            <div class="area1">
            <label>Consultas agendadas:</label>
            <input type="date" name="consulta"><br><br>               
            </div>
            <p class="botao">
            <input name="sendPesqUser" type="submit" value="Consultar">
            </p> 
        </form>
        </form>
    </body>

</html>