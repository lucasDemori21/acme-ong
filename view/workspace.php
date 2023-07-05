<?php 
require_once 'parts/cabecalho.php'; 
require_once '../config/conexao.php';
?>
<script>
    function resposta(id, resposta){
        const resp = resposta;
        const id_cliente = id;
        $.ajax({
            url: '../assets/ajax/resposta_solicitacao_ajax.php',
            method: 'POST',
            data: {
                id: id_cliente,
                resposta: resp
            },
            beforeSend: function(){
                $("#botao_ac_"+id).text('Processando...');
            }
        })
        .done(function(obj) {
            if(obj == 'success'){
                location.reload();
            }else{
                alert('ERRO');
            }
        })
    }

    function encaminhar(id_cliente){
        const id = id_cliente
        const parceiro = $("#parceiros").val();

        $.ajax({
            url: '../assets/ajax/encaminhamento_ajax.php',
            method: 'POST',
            data: {
                id: id,
                parceiro: parceiro
            },
            beforeSend: function(){
                $("#botao_enviar_"+id).text('Enviando...');
            }
        })
        .done(function(obj) {
            if(obj == 'success'){
                location.reload();
            }else{
                alert('ERRO')
            }
        })
        
    }
</script>
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
            <div class="title-workspace">

                <div class="title">
                    <h4>Solicitação</h4>
                </div>
                <div class="title">
                    <h4>Encaminhamento</h4>
                </div>
            </div>
            <div class="layout-image">
                <div class="container-workspace">
                    <?php
                    $sql_user = "SELECT id_cliente, nome, texto_solicitacao, status_sl  FROM ongacme.user";
                    $result_user = mysqli_query($conn, $sql_user);

                    while($solic_ac = mysqli_fetch_assoc($result_user)){

                        if($solic_ac['status_sl'] == '1'){
                    ?>
                    <div class="solicitacao" id="solicitacao-<?php echo $solic_ac['id_cliente'];?>">
                        <div class="comp-solicitacao">
                            <img class="comp-image" src="/assets/imgs/placeholder-image.png" alt="perfil">
                            <div class="comp-name">
                                <h5 class="comp"><?php echo $solic_ac['nome'];?></h5>
                                <input type="hidden" name="idUser" id="idUser<?php echo @$solic_ac['id_cliente'];?>" value="idUser<?php echo @$solic_ac['id_cliente'];?>">
                            </div>
                        </div>
                        <textarea name="texto" id="texto" cols="30" rows="10" readonly>
                            <?php echo trim($solic_ac['texto_solicitacao']);?>
                        </textarea>
                        <div class="button-solicitacao">
                            <div class="button-size d-flex justify-content-end">
                            <button type="button" id="botao_rec_<?php echo $solic_ac['id_cliente']?>" onclick="resposta(<?php echo $solic_ac['id_cliente']?>, 0);" class="btn btn-danger">Recusar</button>
                            <button type="button" id="botao_ac_<?php echo $solic_ac['id_cliente']?>" onclick="resposta(<?php echo $solic_ac['id_cliente']?>, 2);" class="btn btn-success">Aceitar</button>
                            </div>
                        </div>
                    </div>    
                    <?php
                        }
                    }         
                    ?>
                </div>
                <div class="container-workspace">
                    <?php 
                    $sql_solicitacao = "SELECT * FROM ongacme.user";
                    $result_ac = mysqli_query($conn, $sql_solicitacao);

                    while($solic_en = mysqli_fetch_assoc($result_ac)){
                        if($solic_en['status_sl'] == '2'){
                    ?>
                    <div class="solicitacao">
                        <div class="comp-solicitacao">
                            <img class="comp-image" src="/assets/imgs/placeholder-image.png" alt="perfil">
                            <div class="comp-name">
                                <h5 class="comp"><?php echo $solic_en['nome'];?></h5>
                                <input type="hidden" name="idUser" id="idUser<?php echo $solic_en['id_cliente'];?>" value="idUser<?php echo $solic_en['id_cliente'];?>">
                            </div>
                        </div>
                        <textarea name="texto" id="texto" cols="30" rows="10" disabled>
                            <?php echo $solic_en['texto_solicitacao'];?>
                        </textarea>
                        <div class="button-solicitacao">
                            <div class="button-size d-flex justify-content-end">
                                <select name="parceiros" id="parceiros" class="form-select w-50">
                                    <option value="" disabled>Selecione o parceiro</option>
                                    <?php
                                    $sql_parceiros = "SELECT * FROM ongacme.parceiros";
                                    $result_parc = mysqli_query($conn, $sql_parceiros);

                                    while($solic_pr = mysqli_fetch_assoc($result_parc)){        
                                    ?>
                                    <option value="<?php echo $solic_pr['id_parceiro'];?>"><?php echo $solic_pr['nome_empresa'] . ' - ' . $solic_pr['responsavel'];?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <button type="button" id="botao_enviar_<?php echo $solic_en['id_cliente'];?>" onclick="encaminhar(<?php echo $solic_en['id_cliente'];?>);" class="btn btn-success">Enviar</button>
                            </div>
                        </div>
                    </div> 
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous">
</script>
<script>    
    var menu_btn = document.querySelector("#menu-btn");
    var sidebar = document.querySelector("#sidebar");
    var container = document.querySelector(".my-container");
    menu_btn.addEventListener("click", () => {
        sidebar.classList.toggle("active-nav");
        container.classList.toggle("active-cont");
    });
</script>