<?php 
$email = '';
$senha = '';

if($_POST['email'] != ''){
    $email = $_POST['email'];
}
if($_POST['senha'] != ''){
    $senha = $_POST['senha'];
}

echo 'verificado';

?>