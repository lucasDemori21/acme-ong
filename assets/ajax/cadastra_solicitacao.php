<?php
require_once '../../config/conexao.php ';

$name = '';
$email = '';
$cpf = '';
$data_nasc = '';
$telephone = '';
$cep = '';
$state = '';
$city = '';
$address = '';
$number = '';
$renda_familiar = '';
$dep_1 = '';
$nasc_dep_1 = '';
$dep_2 = '';
$nasc_dep_2 = '';
$dep_3 = '';
$nasc_dep_3 = '';
$dep_4 = '';
$nasc_dep_4 = '';
$dep_5 = '';
$nasc_dep_5 = '';
$descricao = '';

if($_POST['name'] != ''){
    $name = $_POST['name'];
}
if($_POST['email'] != ''){
    $email = $_POST['email'];
}

if($_POST['cpf'] != ''){
    $cpf = $_POST['cpf'];
}

if($_POST['data_nasc'] != ''){
    $data_nasc = $_POST['data_nasc'];
}

if($_POST['telephone'] != ''){
    $telephone = $_POST['telephone'];
}

if($_POST['cep'] != ''){
    $cep = $_POST['cep'];
}

if($_POST['state'] != ''){
    $state = $_POST['state'];
}

if($_POST['city'] != ''){
    $city = $_POST['city'];
}

if($_POST['address'] != ''){
    $address = $_POST['address'];
}

if($_POST['renda_familiar'] != ''){
    $renda_familiar = $_POST['renda_familiar'];
}

if($_POST['descricao'] != ''){
    $descricao = $_POST['descricao'];
}

if($_POST['sts'] != ''){
    $sts = $_POST['sts'];
}

$sql = 'INSERT INTO ongacme.user (id_cliente, nome, email, cpf, data_nasc, telefone, 
cep, cidade, bairro, endereco, numero, renda_familiar, descricao, status_sl) 
VALUES(null, "'. $name .'", "'. $email .'", "'. $cpf .'", "'. $data_nasc .'", 
"'. $telephone .'", "'. $cep .'", "'. $state .'", "'. $address .'", 
"'. $number.'", "'. $renda_familiar .'", "'. $descricao .'", "' . $sts . '")'; 


if($result = mysqli_query($conn, $sql)){
    $sql2 = "SELECT id_cliente FROM ongacme.user WHERE nome = '" . $nome . "' AND cpf = '" . $cpf . "'";
    $id = mysqli_fetch_array(mysqli_query($conn, $sql2));

    if(($_POST['dep_1'] != '') && ($_POST['nasc_dep_1'] != '')){
        $dep_1 = $_POST['dep_1'];
        $nasc_dep_1 = $_POST['nasc_dep_1'];
        $sql3 = "INSERT INTO dependentes (id_dependentes, id_cliente, nome_dependente, data_nasc) 
        VALUES(null, '" . $id[0] . "', '" . $dep_1 . "''" . $nasc_dep_1 . "')";
    }
    
    if(($_POST['dep_2'] != '') && ($_POST['nasc_dep_2'] != '')){
        $dep_2 = $_POST['dep_2'];
        $nasc_dep_2 = $_POST['nasc_dep_2'];
        $sql3 = "INSERT INTO dependentes (id_dependentes, id_cliente, nome_dependente, data_nasc) 
        VALUES(null, '" . $id[0] . "', '" . $dep_2 . "''" . $nasc_dep_2 . "')";
    }
    
    if(($_POST['dep_3'] != '') && ($_POST['nasc_dep_3'] != '')){
        $dep_3 = $_POST['dep_3'];
        $nasc_dep_3 = $_POST['nasc_dep_3'];
        $sql3 = "INSERT INTO dependentes (id_dependentes, id_cliente, nome_dependente, data_nasc) 
        VALUES(null, '" . $id[0] . "', '" . $dep_3 . "''" . $nasc_dep_3 . "')";
    }
    
    if(($_POST['dep_4'] != '') && ($_POST['nasc_dep_4'] != '')){
        $dep_4 = $_POST['dep_4'];
        $nasc_dep_4 = $_POST['nasc_dep_4'];
        $sql3 = "INSERT INTO dependentes (id_dependentes, id_cliente, nome_dependente, data_nasc) 
        VALUES(null, '" . $id[0] . "', '" . $dep_4 . "''" . $nasc_dep_4 . "')";
    }
    
    if(($_POST['dep_5'] != '') && ($_POST['nasc_dep_5'] != '')){
        $dep_5 = $_POST['dep_5'];
        $nasc_dep_5 = $_POST['nasc_dep_5'];
        $sql3 = "INSERT INTO dependentes (id_dependentes, id_cliente, nome_dependente, data_nasc) 
        VALUES(null, '" . $id[0] . "', '" . $dep_5 . "''" . $nasc_dep_5 . "')";
    }
    echo 'success';
}else{
    echo 'error';
}

?>