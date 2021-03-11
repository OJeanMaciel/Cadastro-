<?php 
include_once "conexao.php";
?>
<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Página de Consultas</title>
        <link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./styled.css">
        <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-ligth" style="background-color: #00BFFF" >
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Ir para Home</a>
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
            <table class="tabela" border="1" style='width:50%'>
            <tr>
            <th>CPF</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Email</th>
            <th>Consulta</th>
            <th>Horario</th>
            <th>Sintoma</th>
            </tr>
        <?php     
            $sendPesqUser = filter_input(INPUT_POST, 'sendPesqUser', FILTER_SANITIZE_STRING);
            if ($sendPesqUser) {
                $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
                $result_cadastro = "SELECT * FROM cadastro WHERE nome LIKE '%$nome%'";
                $resultado_cadastro = mysqli_query($conn, $result_cadastro);

                while($row_usuario = mysqli_fetch_assoc($resultado_cadastro)) {
                    $cpf =  $row_usuario['cpf'];
                    $nome =  $row_usuario['nome'];
                    $idade = $row_usuario['idade'];
                    $email = $row_usuario['email'];
                    $consulta =  $row_usuario['data'];
                    $horario =  $row_usuario['horario'];
                    $sintoma =  $row_usuario['sintoma'];
                    echo "<tr>";
                    echo "<td>".$cpf."</td>";
                    echo "<td>".$nome."</td>";
                    echo "<td>".$idade."</td>";
                    echo "<td>".$email."</td>";
                    echo "<td>".$consulta."</td>";
                    echo "<td>".$horario."</td>";
                    echo "<td>".$sintoma."</td>";
                    echo "</tr>";
                }                
            }   
        ?>
    </body>

</html>