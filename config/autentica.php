<?php
session_start();
$_SESSION['auth'] = '';
$_SESSION['pes_cod'] = '';
$_SESSION['sts'] = '';
require_once 'conexao.php';

// Prepare the query
$sql = "SELECT * FROM colaboradores WHERE email = ? AND senha = ?";
$stmt = $conn->prepare($sql);

// Bind the parameters
$email = '';
$senha = '';
if($_POST['email'] != ''){
    $email = $_POST['email'];
}
if($_POST['senha'] != ''){
    $senha = $_POST['senha'];
}
$stmt->bind_param("is", $email, $senha);

// Execute the query
$stmt->execute();

// Fetch the results
$result = $stmt->get_result();

// Process the results
while ($login = $result->fetch_assoc()) {
    if($login['email'] == $email && $login['senha'] == $senha ){
        $_SESSION['auth'] = 'liberado';
        $_SESSION['pes_cod'] = $login['id_colaborador'];
        $_SESSION['sts'] = $login['sts'];
        echo 'verificado';
        exit();
    }else{
        echo 'error';
        exit();
    }
}
$stmt->close();
$mysqli->close();
?>