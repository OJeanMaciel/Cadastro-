<?php 
session_start();
include_once("../bd/conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$crm = filter_input(INPUT_POST, 'crm', FILTER_SANITIZE_STRING);
$especialidade = filter_input(INPUT_POST, 'especialidade', FILTER_SANITIZE_STRING);


$result_medico = "INSERT INTO medico (nome, crm, especialidade ) VALUES ('$nome', '$crm', '$especialidade')";
$resultado_medico = mysqli_query($conn, $result_medico);

if (mysqli_insert_id ($conn)) {
    $_SESSION['msg'] = "<p style='color:green'> Medico cadastrado com Sucesso! </p>";
    header("Location: ../model/cadmedico.php");
}else {
    $_SESSION['msg'] = "<p style='color:red'> Medico não cadastrado! </p>";
    header("Location: ../model/cadmedico.php");
}
?>