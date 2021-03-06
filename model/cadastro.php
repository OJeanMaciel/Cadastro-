<?php 
include_once('../bd/conexao.php');
session_start();
?>
<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/styled.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css">                 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.css"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
        <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

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
        <title>Página de Cadastro de Consultas</title>
    </head>
    <body> 
        <nav class="navbar navbar-expand-lg navbar-ligth" style="background-color: #00BFFF">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Ir para Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="agenda.php">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pesquisa.php">Faça a Pesquisa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadmedico.php">Cadastrar médico</a>
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
            <h1>Cadastro de pacientes</h1>
        <?php 
            if(isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }            
        ?>
        <div class="container">
            <form class="form" method="POST" action="../controller/processa.php">
                <div class="area1">

                    <label>Nome:</label>
                    <input type="text" name="nome" placeholder="Digite seu nome completo"><br><br>
        
                    <label>Data de nascimento:</label>
                    <input type="date"/>
                    <br><br>
        
                    <label>CPF:</label>
                    <input type="cpf" name="cpf" placeholder="Ex.: 000.000.000-00" maxlength="14" size="40" onkeypress="formatar_mascara(this,'###.###.###-##')" ><br><br>

                    <label>Telefone:</label>
                    <input type="int" name="telefone" placeholder="Ex:. 00 0000-00000" maxlength="12" onkeypress="formatar_mascara(this,'00 000000000')" ><br><br><br>
              
                </div>

                <div class="area2">
                        
                        <label>Consulta:</label>
                        <input type="date" /><br><br>

                        <label>Hora:</label>
                        <input type="text" name="hora" placeholder="Ex:.14:00" maxlength="5" size="40" onkeypress="formatar_mascara(this,'##:##')"><br><br>

                        <label>Sintoma:</label>
                        <input type="text" name="sintoma" placeholder="Descreva os sintomas!"><br><br><br>
                        
                        <label>Médicos: </label><br>
                            <select class="select" name="medico">
                                <option>Selecione</option>
                                <?php
                                $result_medico = "SELECT * FROM `medico`";
                                $resultado_medico = mysqli_query($conn, $result_medico);
                                while($row_medico = mysqli_fetch_assoc($resultado_medico)){ ?>
                                <option value="<?php echo $row_medico['nome']; ?>"><?php echo $row_medico['nome'];?>
                                </option> <?php
                                }
                            ?>
                            </select><br><br><br>
                </div>
                <p class="botao">
                    <input type="submit" value="Cadastrar">
                </p>
                
            </form>     
        </div>
    </body>

</html>