<?php
require_once '../../config/conexao.php';
$id = 0;
$resposta = 0;
if($_POST['id'] != '' && $_POST['resposta'] != ''){

    $id = $_POST['id'];
    $resposta = $_POST['resposta'];

    $sql = "UPDATE ongacme.user
    SET status_sl = '" . $resposta . "'
    WHERE id_cliente = '" . $id . "'";
    if(mysqli_query($conn, $sql)){
        echo 'success';
    }else{
        echo 'error';
    }
}
?>
