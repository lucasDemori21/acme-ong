<?php
require_once 'conexao.php';

// Prepare the query
$sql = "SELECT email, senha FROM colaboradores WHERE email = ? AND senha = ?";
$stmt = $conn->prepare($sql);

// Bind the parameters
$email = 'lucas-demori2001@hotmail.com';
$senha = '#$FSFSFSF';
// if($_POST['email'] != ''){
//     $email = $_POST['email'];
// }
// if($_POST['senha'] != ''){
//     $senha = $_POST['senha'];
// }
$stmt->bind_param("is", $email, $senha);

// Execute the query
$stmt->execute();

// Fetch the results
$result = $stmt->get_result();

// Process the results
while ($login = $result->fetch_assoc()) {

    // Do something with each row
    echo "Email: " . $login['email'] . ", Senha: " . $login['senha'] . "<br>";
}

// Close the statement and the connection
$stmt->close();
$mysqli->close();

echo 'verificado';

?>