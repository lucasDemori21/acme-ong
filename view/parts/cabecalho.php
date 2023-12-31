<?php 
session_start();
if($_SESSION['auth'] == 'liberado'){
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/admin.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.umd.js"
        integrity="sha512-CMF3tQtjOoOJoOKlsS7/2loJlkyctwzSoDK/S40iAB+MqWSaf50uObGQSk5Ny/gfRhRCjNLvoxuCvdnERU4WGg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    </head>
<body>
    <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column nav-botao" id="sidebar">
        <ul class="nav flex-column text-white w-100">
            <a href="#" class="text-white text-center my-5" style="text-decoration: none; font-size: 28px;">
                Admin Page
            </a>
            <div class="login-profile">
                <div class="user-image">
                    <img width="50" height="50" style="border-radius: 100%;" src="../assets/imgs/placeholder-image.png"
                        alt="user image">
                </div>
                <div class="user-text">
                    <h5 id="username">Username</h5>
                    <p id="funcao">Função</p>
                </div>
            </div>
            <a href="admin.php" class="nav-link">
                <i class="bx bxs-dashboard"></i>
                <span class="mx-2">Dashboard</span>
            </a>
            <a href="layout_edit.php" class="nav-link">
                <i class="bx bx-user-check"></i>
                <span class="mx-2">Layout</span>
            </a>
            <a href="workspace.php" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Worspace</span>
            </a>
            <a href="#" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Colaboradores</span>
            </a>
            <a href="#" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Cadastro parceiros</span>
            </a>
        </ul>
    </div>
<?php 
}else{
    header('Location: ../login.php');
}
?>