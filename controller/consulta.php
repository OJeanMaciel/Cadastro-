<?php 
session_start();
include_once("../bd/conexao.php");
?>
<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Página de Consultas</title>
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
            <table class="tabela" border="1" style='width: 85%'>
            <tr>
            <th>CPF</th>
            <th>Nome</th>
            <th>Data Nascimento</th>
            <th>Medico</th>
            <th>Consulta</th>
            <th>Hora</th>
            <th>Telefone</th>
            <th>Sintomas</th>
            <th>Excluir</th>
            </tr>
        <?php     
            $sendPesqUser = filter_input(INPUT_POST, 'sendPesqUser', FILTER_SANITIZE_STRING);
            if ($sendPesqUser) {
                $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
                $result_cadastro = "SELECT * FROM cadastro as A INNER JOIN consulta as B where cpf = '$cpf' and cpf_id = '$cpf'";
                $resultado_cadastro = mysqli_query($conn, $result_cadastro);

                while($row_usuario = mysqli_fetch_assoc($resultado_cadastro)) {
                    $cpf =  $row_usuario['cpf'];
                    $nome =  $row_usuario['nome'];
                    $data_nascimento = $row_usuario['data_nascimento'];
                    $medico =  $row_usuario['crm_id'];
                    $telefone =  $row_usuario['telefone'];
                    $consulta =  $row_usuario['consulta'];
                    $hora =  $row_usuario['hora'];
                    $sintoma =  $row_usuario['sintoma'];
                    echo "<tr>";
                    echo "<td>".$cpf."</td>";
                    echo "<td>".$nome."</td>";
                    echo "<td>".$data_nascimento."</td>";
                    echo "<td>".$medico."</td>";
                    echo "<td>".$consulta."</td>";
                    echo "<td>".$hora."</td>";
                    echo "<td>".$telefone."</td>";
                    echo "<td>".$sintoma."</td>";
                    echo "<td><a href='delete.php?Id=".$row_usuario['Id']."'>Excluir</a></td>";
                    echo "</tr>";
                }                
            }   
        ?>
    </body>

</html>