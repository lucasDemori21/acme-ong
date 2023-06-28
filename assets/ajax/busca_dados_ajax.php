<?php
session_start();
require_once '../../config/conexao.php';
$id = $_SESSION['pes_cod'];
$sts = $_SESSION['sts'];
$nome = '';
$image = '';
$funcao = '';

// Prepare the query
$sql = "SELECT * FROM colaboradores WHERE id_colaborador = ? AND sts = ?";
$stmt = $conn->prepare($sql);
// Bind the parameters

$stmt->bind_param("is", $id, $sts);

// Execute the query
$stmt->execute();

// Fetch the results
$result = $stmt->get_result();

// Process the results
while ($dados = $result->fetch_assoc()) {
    $nome = $dados['nome_completo']; 
    $image = 1234;
    $funcao = $dados['funcao'];    
} 

$array_dados = array();

$array_dados['dados']['dados_user'] = $nome;
$array_dados['dados']['dados_image'] = $image;
$array_dados['dados']['dados_funcao'] = $funcao;

$stmt->close();
$conn->close();

echo json_encode($array_dados);

?>