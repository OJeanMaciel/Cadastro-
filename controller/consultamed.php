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
            <table class="tabela" border="1" style='width:80%'>
            <tr>
            <th>CRM</th>
            <th>Nome</th>
            <th>Especialidade</th>
            </tr>
        <?php     
            $sendPesqUser = filter_input(INPUT_POST, 'sendPesqUser', FILTER_SANITIZE_STRING);
            if ($sendPesqUser) {
                $especialidade = filter_input(INPUT_POST, 'especialidade', FILTER_SANITIZE_STRING);
                $result_med = "SELECT * FROM medico WHERE especialidade LIKE '%$especialidade%'";
                $resultado_med = mysqli_query($conn, $result_med);

                while($row_usuario = mysqli_fetch_assoc($resultado_med)) {
                    $crm =  $row_usuario['crm'];
                    $nome =  $row_usuario['nome'];
                    $especialidade = $row_usuario['especialidade'];
                    echo "<tr>";
                    echo "<td>".$crm."</td>";
                    echo "<td>".$nome."</td>";
                    echo "<td>".$especialidade."</td>";
                    echo "</tr>";
                }                
            }   
        ?>
    </body>

</html>