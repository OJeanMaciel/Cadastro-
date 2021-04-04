<?php 
session_start();
include_once("../bd/conexao.php");
?>
<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Agenda</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/styled.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-ligth" style="background-color: #00BFFF" >
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Ir para Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../model/cadastro.php">Faça o Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../model/pesquisa.php">Faça a Pesquisa</a>
                    </li>
                </ul>
            </div>
            <div >                
                <a class="nav-link" href="../model/sobre.php">Sobre Nós</a>                
            </div>
        </nav>
            <table class="tabela" border="1" style='width:80%'>
            <tr>
            <th>Nome</th>
            <th>Medico</th>
            <th>Consulta</th>
            <th>Hora</th>
            <th>Telefone</th>
            </tr>
        <?php     
            $sendPesqUser = filter_input(INPUT_POST, 'sendPesqUser', FILTER_SANITIZE_STRING);
            if ($sendPesqUser) {
                $consulta = filter_input(INPUT_POST, 'consulta', FILTER_SANITIZE_STRING);
                $result_agenda = "SELECT * FROM consulta as A INNER JOIN cadastro as B WHERE consulta = '$consulta' AND consulta_cad = '$consulta' ORDER BY hora";
                $resultado_agenda = mysqli_query($conn, $result_agenda);

                while($row_usuario = mysqli_fetch_assoc($resultado_agenda)) {
                    $consulta =  $row_usuario['consulta'];
                    $hora =  $row_usuario['hora'];
                    $telefone =  $row_usuario['telefone'];
                    $nome =  $row_usuario['nome'];
                    $medico = $row_usuario['crm_id'];
                    echo "<tr>";
                    echo "<td>".$nome."</td>";
                    echo "<td>".$medico."</td>";
                    echo "<td>".$consulta."</td>";
                    echo "<td>".$hora."</td>";
                    echo "<td>".$telefone."</td>";
                    echo "</tr>";
                }                
            }   
        ?>
    </body>

</html>