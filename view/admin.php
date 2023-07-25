<?php require_once 'parts/cabecalho.php'; ?>

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
            <div class="container-glid">      
                <div class="chart-gh">
                    <canvas id="myChart"></canvas>
                </div>           
            </div>
        </div>
    </div>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
<script src="../assets/js/chart.js"></script>
<script>
window.onload = function(){
    $.ajax({
    url: '../assets/ajax/busca_dados_ajax.php',
    method: 'post',
    dataType: 'json'
    })
    .done(function(obj) {
        var dados = obj.dados;
        var nome = dados.dados_user;
        var image = dados.dados_image;
        var funcao = dados.dados_funcao;

        $('#username').text(nome);
        $('#funcao').text(funcao);
    })
};
</script>
</body>

</html>