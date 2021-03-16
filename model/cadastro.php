<?php 
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
        <div class="container">
            <form class="form" method="POST" action="../controller/processa.php">
                <div class="area1">

                    <label>Nome:</label>
                    <input type="text" name="nome" placeholder="Digite seu nome completo"><br><br>
        
                    <label>Idade:</label>
                    <input type="int" name="idade" placeholder="Digite sua idade"><br><br>
        
                    <label>CPF:</label>
                    <input type="cpf" name="cpf" placeholder="Ex.: 000.000.000-00" maxlength="14" size="40" onkeypress="formatar_mascara(this,'###.###.###-##')" ><br><br>

                    <label>E-mail:</label>
                    <input type="email" name="email" placeholder="Digite seu Email"><br><br>                
                </div>

                <div class="area2">
                        
                        <label>Consulta:</label>
                        <input type="date" name="consulta" placeholder="Digite o dia para sua consulta"><br><br>

                        <label>Hora:</label>
                        <input type="text" name="horario" placeholder="Ex.: 00:00"><br><br>
                        
                        <label>Sintoma:</label>
                        <input type="text" name="sintoma" placeholder="Descreva os sintomas!"><br><br><br><br>
                        
                        <label class="btnradio">
                            <input type="radio" name="medico" value="Dr.Fernando">Dr.Fernando
                        </label>
                        <label class="btnradio">
                            <input type="radio" name="medico" value="Dra.Fernanda">Dra.Fernanda
                        </label>
                        <labe class="btnradio"l>
                            <input type="radio" name="medico" value="Dra.Fernando">Dra.Isabela
                        </label>
                        <label class="btnradio">
                            <input type="radio" name="medico" value="Dra.Manuela">Dra.Manuela
                        </label>
                        <label class="btnradio">
                            <input type="radio" name="medico" value="Dr.Rodrigues">Dr.Rodrigues
                        </label>
                        <label class="btnradio">
                            <input type="radio" name="medico" value="Dr.Mariana">Dra.Mariana
                        </label>
                        
                </div>
                <p class="botao">
                    <input type="submit" value="Cadastrar">
                </p>
            </form>     
        </div>
    </body>

</html>