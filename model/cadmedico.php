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
        <title>Cadastro de Médicos</title>
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
            <h1>Cadastro de Médicos</h1>
        <?php 
            if(isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            
        ?>
        <div class="container">
            <form class="form" method="POST" action="../controller/processamed.php">
                <div class="area1">

                    <label>Nome:</label>
                    <input type="text" name="nome" placeholder="Digite seu nome completo"><br><br>
        
                    <label>CRM:</label>
                    <input type="text" name="crm" placeholder="EX:. 00000000-0/BR" maxlength="13" size="40" onkeypress="formatar_mascara(this,'########-#/##')"><br><br>
        
                    <label>Especialidade:</label>
                    <input type="text" name="especialidade" placeholder="Descreva a especialidade"><br><br>
                    
                </div>
                <p class="botao">
                    <input type="submit" value="Cadastrar">
                </p>
            </form>     
        </div>
    </body>

</html>