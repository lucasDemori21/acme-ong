<?php
require_once '../../config/conexao.php';
$id = 0;
$parceiro = 0;
if($_POST['id'] != '' && $_POST['parceiro'] != ''){

    $id = $_POST['id'];
    $parceiro = $_POST['parceiro'];

    $sql = "INSERT INTO ongacme.encaminhados (id_encaminhado, id_cliente, id_parceiro) 
    VALUES (null, '" . $id . "', '" . $parceiro . "')";
    if(mysqli_query($conn, $sql)){
        $sql_resp = "UPDATE ongacme.user
        SET status_sl = '3'
        WHERE id_cliente = '" . $id . "'";
        if(mysqli_query($conn, $sql_resp)){
            echo 'success';
        }
    }
}
?>