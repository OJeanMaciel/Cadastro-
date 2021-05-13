<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styled.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css">
    <title>Quiz</title>
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
                        <a class="nav-link" href="./cadastro.php">Faça o Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pesquisa.php">Faça a Pesquisa</a>
                    </li>
                </ul>
            </div>
        </nav> 

        <h1>Responda o Questionário!</h1>
    <?php
    if (!empty($_POST)) {

        $ans1 = $_POST['ans1'];
        $ans2 = $_POST['ans2'];
        $ans3 = $_POST['ans3'];
        $ans4 = $_POST['ans4'];
        $ans5 = $_POST['ans5'];
        $ans6 = $_POST['ans6'];
        $ans7 = $_POST['ans7'];
        $ans8 = $_POST['ans8'];
        $ans9 = $_POST['ans9'];
        $ans10 = $_POST['ans10'];
        $correct = 0;

        if ($ans1 == "Sim") {
            $correct+=10;
        } else {
        }
        if ($ans2 == "Sim") {
            $correct+=10;
        } else {
        }
        if ($ans3 == "Sim") {
            $correct+=10;
        } else {
        }
        if ($ans4 == "Sim") {
            $correct+=10;
        } else {
        }
        if ($ans5 == "Sim") {
            $correct+=10;
        } else {
        }
        if ($ans6 == "Sim") {
            $correct+=10;
        } else {
        }
        if ($ans7 == "Sim") {
            $correct+=10;
        } else {
        }
        if ($ans8 == "Sim") {
            $correct+=10;
        } else {
        }
        if ($ans9 == "Sim") {
            $correct+=10;
        } else {
        }
        if ($ans10 == "Sim") {
            $correct+=10;
        } else {
        }
        if ($correct <= 40) {
           echo "<p style='color:red'>Não se Preocupe! Você tem baixa probabilidade $correct% de estar com Covid!</p>";
               
        } elseif ($correct > 40 && $correct < 70) {
           echo "<p style='color:red'>Você tem $correct% de probabilidade de estar com Covid-19, fique atento!.</p>";            
         
        } elseif ($correct >= 70) {
           echo "<p style='color:red'>Você tem grande probabilidade, $correct% de estar com Covid-19, procure um médico!</p>";
           
        }
    } 
?>

        <form action="teste.php" method="POST">

        <div class="area3">        
        <p>Você tem febre?</p>        
        <input type="radio" id="ans1" name="ans1" value="Sim">
        <label for="male">Sim</label>               
        <input type="radio" id="ans1" name="ans1" value="0">
        <label for="male">Não</label>

        <p>Você tem tosse seca?</p>       
        <input type="radio" id="ans2" name="ans2" value="Sim">
        <label for="male">Sim</label>               
        <input type="radio" id="ans2" name="ans2" value="0">
        <label for="male">Não</label>

        <p>Você sente cansaço?</p>   
        <input type="radio" id="ans3" name="ans3" value="Sim">
        <label for="male">Sim</label>               
        <input type="radio" id="ans3" name="ans3" value="0">
        <label for="male">Não</label>

        <p>Você tem erupção cutânea na pele ou descoloração dos dedos das mãos ou dos pés?</p>   
        <input type="radio" id="ans4" name="ans4" value="Sim">
        <label for="male">Sim</label>               
        <input type="radio" id="ans4" name="ans4" value="0">
        <label for="male">Não</label>

        <p>Você tem dor de garganta?</p>   
        <input type="radio" id="ans5" name="ans5" value="Sim">
        <label for="male">Sim</label>               
        <input type="radio" id="ans5" name="ans5" value="0">
        <label for="male">Não</label>

        <p>Você tem diarreia?</p>   
        <input type="radio" id="ans6" name="ans6" value="Sim">
        <label for="male">Sim</label>               
        <input type="radio" id="ans6" name="ans6" value="0">
        <label for="male">Não</label>

        <p>Você tem dificuldade de respirar ou falta de ar?</p>   
        <input type="radio" id="ans7" name="ans7" value="Sim">
        <label for="male">Sim</label>               
        <input type="radio" id="ans7" name="ans7" value="0">
        <label for="male">Não</label>

        <p>Você tem perda de paladar ou olfato?</p>   
        <input type="radio" id="ans8" name="ans8" value="Sim">
        <label for="male">Sim</label>               
        <input type="radio" id="ans8" name="ans8" value="0">
        <label for="male">Não</label>

        <p>Você tem dor ou pressão no peito?</p>   
        <input type="radio" id="ans9" name="ans9" value="Sim">
        <label for="male">Sim</label>               
        <input type="radio" id="ans9" name="ans9" value="0">
        <label for="male">Não</label>

        <p>Você tem perda de fala ou movimento?</p>   
        <input type="radio" id="ans10" name="ans10" value="Sim">
        <label for="male">Sim</label>               
        <input type="radio" id="ans10" name="ans10" value="0">
        <label for="male">Não</label>
        <br><br>        
        <p class="botao">
            <input type="submit" value="Enviar">
        </p>
        </div>
    </form>
</body>
</html>