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
                    <h5>Username</h5>
                    <p>Função</p>
                </div>
            </div>
            <li href="#" class="nav-link">
                <i class="bx bxs-dashboard"></i>
                <span class="mx-2">Dashboard</span>
            </li>
            <li href="#" class="nav-link">
                <i class="bx bx-user-check"></i>
                <span class="mx-2">Layout</span>
            </li>
            <li href="#" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Contact</span>
            </li>
            <li href="#" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Contact</span>
            </li>
        </ul>
    </div>
    <div class="p-1 my-container active-cont">
        <nav class="navbar top-navbar navbar-light px-5">
            <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
        </nav>
        <legend class="title-page">Dashboard</legend>

        <div class="container-tabs">
            <ul class="nav nav-tabs w-100">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>