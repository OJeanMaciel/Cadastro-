<?php
    session_start();
    include_once("../bd/conexao.php");

    $id = filter_input(INPUT_GET, 'Id', FILTER_SANITIZE_NUMBER_INT);
    $result_del = "DELETE FROM cadastro WHERE id = '$id'";
    $resultado_delete = mysqli_query($conn, $result_del);


    if(mysqli_affected_rows($conn)) {        
        $_SESSION['msg'] = "<p style='color:green'> Consulta excluida com Sucesso! </p>";
        header("Location: ../model/pesquisa.php");
    }else {
        $_SESSION['msg'] = "<p style='color:red'> Erro consulta não foi excluida! </p>";
        header("Location: ../model/pesquisa.php");    
    }
   

?>