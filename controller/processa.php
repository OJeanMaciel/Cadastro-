<?php 
session_start();
include_once("../bd/conexao.php");
$sintoma = $_POST['sintoma'];

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$medico = filter_input(INPUT_POST, 'medico', FILTER_SANITIZE_STRING);
$consulta = filter_input(INPUT_POST, 'consulta', FILTER_SANITIZE_STRING);
$horario = filter_input(INPUT_POST, 'horario', FILTER_SANITIZE_STRING);
$sintoma = filter_input(INPUT_POST, 'sintoma', FILTER_SANITIZE_STRING);


$result_cadastro = "INSERT INTO cadastro (cpf, nome, idade, email, medico, consulta, horario, sintoma) VALUES ('$cpf', '$nome', '$idade', '$email', '$medico', '$consulta', '$horario', '$sintoma')";
$result_usuario = mysqli_query($conn, $result_cadastro);

if (mysqli_insert_id ($conn)) {
    $_SESSION['msg'] = "<p style='color:green'> Consulta cadastrada com Sucesso! </p>";
    header("Location: ../model/cadastro.php");
}else {
    $_SESSION['msg'] = "<p style='color:green'> Consulta cadastrada com Sucesso! </p>";
    header("Location: ../model/cadastro.php");
}
?>