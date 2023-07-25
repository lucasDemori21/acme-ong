<?php
require_once '../../config/conexao.php';
$imagens = 1;
$array_img = array();
$sql = "SELECT id_imagem, nome_imagem FROM imagens WHERE id_imagem = '". $imagens ."'";
$result = mysqli_query($conn, $sql);
$i = 0;
while ($imgs = mysqli_fetch_assoc($result)){
    $array_img[$i] = $imgs['nome_imagem'];
    $i++;
}

$array_imagens['dados']['imagens'] = $array_img;

echo json_encode($array_imagens)
?>