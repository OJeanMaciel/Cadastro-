<?php 
session_start();
include_once("../bd/conexao.php");
$sintoma = $_POST['sintoma'];

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);
$medico = filter_input(INPUT_POST, 'medico', FILTER_SANITIZE_STRING);
$consulta = filter_input(INPUT_POST, 'consulta', FILTER_SANITIZE_STRING);
$hora = filter_input(INPUT_POST, 'hora', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$sintoma = filter_input(INPUT_POST, 'sintoma', FILTER_SANITIZE_STRING);


    $result_cadastro = "INSERT INTO cadastro (cpf, nome, idade, medico) VALUES ('$cpf', '$nome', '$idade', '$medico')";
    $result_usuario = mysqli_query($conn, $result_cadastro);
    
    $result_consulta = "INSERT INTO consulta (consulta, hora, telefone, sintoma, cpf_id) VALUES ('$consulta', '$hora', '$telefone', '$sintoma', '$cpf')";
    $result_usuarios = mysqli_query($conn, $result_consulta);
    
    if (mysqli_insert_id ($conn)) {
    $_SESSION['msg'] = "<p style='color:green'> Consulta cadastrada com Sucesso! </p>";
        header("Location: ../model/cadastro.php");
    }else {
        $_SESSION['msg'] = "<p style='color:red'> Consulta não cadastrada! </p>";
        header("Location: ../model/cadastro.php");
    }
?>