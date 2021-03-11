<?php 
session_start();
?>
<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./styled.css">
        <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
        <title>Página de Cadastro de Consultas</title>
    </head>
    <body> 
        <nav class="navbar navbar-expand-lg navbar-ligth" style="background-color: #00BFFF">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Ir para Home</a>
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
            <h1>Cadastro de pacientes</h1>
        <?php 
            if(isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <div class="area">
            <form class="form" method="POST" action="processa.php">
                <label>Nome:</label>
                <input type="text" name="nome" placeholder="Digite seu nome completo"><br><br>
    
                <label>Idade:</label>
                <input type="int" name="idade" placeholder="Digite sua idade"><br><br>
    
                <label>CPF:</label>
                <input type="cpf" name="cpf" placeholder="Ex.: 000.000.000-00"><br><br>

                <label>E-mail:</label>
                <input type="email" name="email" placeholder="Digite seu Email"><br><br>
                
                <label>Consulta:</label>
                <input type="date" name="consulta" placeholder="Digite o dia para sua consulta"><br><br>

                <label>Hora:</label>
                <input type="horario" name="horario" placeholder="Ex.: 00:00"><br><br>
                
                <label>Sintoma:</label>
                <input type="sintoma" name="sintoma" placeholder="Descreva os sintomas!"><br><br>
                
                <p class="botao" >
                    <input type="submit" value="Cadastrar">
                </p>
            </form>               
        </div>
    </body>

</html>