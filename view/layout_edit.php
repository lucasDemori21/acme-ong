<?php 
require_once 'parts/cabecalho.php'; 
require_once '../config/conexao.php';
?>
    <div class="p-1 my-container active-cont">
        <nav class="navbar top-navbar navbar-light px-5">
            <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
        </nav>
        <legend class="title-page">Layout da página</legend>

        <div class="container-tabs">
            <ul class="nav nav-tabs w-100">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Imagens</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link3</a>
                </li>
            </ul>
            <div class="layout-image">
                <?php 
                $sql = "SELECT * FROM ongacme.imagens";
                $result = mysqli_query($conn, $sql);
                while($image = mysqli_fetch_assoc($result)){
                ?>
                
                <div class="container-image">
                    <div class="image-up">
                        <img src="../assets/imgs/<?php echo $image['nome_imagem'];?>.png" alt="Imagem-<?php echo $image['id_imagem']; ?>">
                    </div>
                    <button type="button" id="botao-<?php echo $image['id_imagem']; ?>" onclick="selecionar('<?php echo $image['nome_imagem'];?>', <?php echo $image['id_imagem']; ?>);" class="image-button">Selecionar</button> 
                </div>
                
                <?php    
                }
                ?>

            </div>
        </div>


    </div>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
<script>
    var menu_btn = document.querySelector("#menu-btn");
    var sidebar = document.querySelector("#sidebar");
    var container = document.querySelector(".my-container");
    menu_btn.addEventListener("click", () => {
        sidebar.classList.toggle("active-nav");
        container.classList.toggle("active-cont");
    });

    function selecionar(name_image, id_image){
        $.ajax({
            url: '../assets/ajax/upload_imagens.php',
            method: 'post',
            data: {
                name_image: name_image
            },
            beforeSend: function(){
                $("#botao-"+id_image).text('Verificando...');
            }
        })
        .done(function(obj) {
            if(obj == 'success'){
                $("#botao-"+id_image).text("Selecionado");
            }else{
                alert('Ocorreu algum erro, Tente novamente.')
                $("#botao-"+id_image).text("Selecionar");
            }
        })
    }


</script>
</body>

</html>