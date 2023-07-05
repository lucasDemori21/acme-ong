<?php 
require_once '../../config/conexao.php';

$name_image = '';

if($_POST['nome_image'] != ''){
    $name_image = $_POST['nome_image'];
    $sql = "INSERT INTO imagenson (id_image, nome_image) VALUES (null, '" . $nome_image . "')";
    if(mysqli_query($conn, $sql)){
        echo 'success';
    }else{
        echo 'error';
    }
}


?>