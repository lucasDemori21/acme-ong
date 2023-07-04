<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACME</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid" >
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Colaborador</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="apr-texto">
        <div class="texto">
            <p><span>Joinville, SC</span><br> ONG acme para auxiliar pessoas<br>
                necessitadas.</p>
        </div>
        <div class="texto">
            <p>Nossa missão é fazer parceria com<br> empresas para assim conseguir suprir a<br> necessidade de muitas
                pessoas com<br> roupas, alimentos, moveis e produtos<br> de bazar.</p>
        </div>
    </div>

    <div id="carouselExampleInterval1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="https://placehold.co/1200x400" class="d-block w-100 carrousel-image" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="https://placehold.co/1200x400" class="d-block w-100 carrousel-image" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://placehold.co/1200x400" class="d-block w-100 carrousel-image" alt="...">
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval1"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval1"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <?php require_once 'view/parts/cards_servicos.php'; ?>
    <?php require_once 'view/parts/cards_parceiros.php'; ?>
    <?php require_once 'view/parts/cards_feedback.php'; ?>

    <section style="height: auto; background-color: #A2D6F3;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <h1 class="mb-3" style="overflow: hidden; text-align: center;">Solicitar</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="cpf" class="form-label">Cpf</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" required>
                            </div>
                            <div class="col-md-6">
                                <label for="data-nasc" class="form-label">Data de nascimento</label>
                                <input type="date" class="form-control" id="data-nasc" name="data-nasc" required>
                            </div>
                            <div class="col-md-6">
                                <label for="telephone" class="form-label">Telefone</label>
                                <input type="email" class="form-control" id="telephone" name="telephone" required>
                            </div>
                            <div class="col-md-6">
                                <label for="cep" class="form-label">CEP</label>
                                <input type="email" class="form-control" id="cep" name="cep" required>
                            </div>
                            <div class="col-md-6">
                                <label for="state" class="form-label">Estado</label>
                                <select class="form-control" name="state" id="state">
                                    <option value="AC">AC - Acre</option>
                                    <option value="AL">AL - Alagoas</option>
                                    <option value="AP">AP - Amapá</option>
                                    <option value="AM">AM - Amazonas</option>
                                    <option value="BA">BA - Bahia</option>
                                    <option value="CE">CE - Ceará</option>
                                    <option value="DF">DF - Distrito Federal</option>
                                    <option value="ES">ES - Espírito Santo</option>
                                    <option value="GO">GO - Goiás</option>
                                    <option value="MA">MA - Maranhão</option>
                                    <option value="MT">MT - Mato Grosso</option>
                                    <option value="MS">MS - Mato Grosso do Sul</option>
                                    <option value="MG">MG - Minas Gerais</option>
                                    <option value="PA">PA - Pará</option>
                                    <option value="PB">PB - Paraíba</option>
                                    <option value="PR">PR - Paraná</option>
                                    <option value="PE">PE - Pernambuco</option>
                                    <option value="PI">PI - Piauí</option>
                                    <option value="RJ">RJ - Rio de Janeiro</option>
                                    <option value="RN">RN - Rio Grande do Norte</option>
                                    <option value="RS">RS - Rio Grande do Sul</option>
                                    <option value="RO">RO - Rondônia</option>
                                    <option value="RR">RR - Roraima</option>
                                    <option value="SC">SC - Santa Catarina</option>
                                    <option value="SP">SP - São Paulo</option>
                                    <option value="SE">SE - Sergipe</option>
                                    <option value="TO">TO - Tocantins</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="city" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                            <div class="col-md-6">
                                <label for="address" class="form-label">Endereço</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                            <div class="col-md-6">
                                <label for="number" class="form-label">Número</label>
                                <input type="email" class="form-control" id="number" name="number" required>
                            </div>
                            <div class="col-md-6">
                                <label for="renda-familiar" class="form-label">Renda Familiar</label>
                                <input type="text" class="form-control" id="renda-familiar" name="renda-familiar">
                            </div>
                            <h4 style="margin-top: 5%;">Dependente 1</h4>
                            <div class="col-md-6">
                                <label for="dep-1" class="form-label">Nome completo</label>
                                <input type="text" class="form-control" id="dep-1" name="dep-1">
                            </div>
                            <div class="col-md-6">
                                <label for="nasc-dep-1" class="form-label">Data de nascimento</label>
                                <input type="date" class="form-control" id="nasc-dep-1" name="nasc-dep-1">
                            </div>
                            <h4>Dependente 2</h4>
                            <div class="col-md-6">
                                <label for="dep-2" class="form-label">Nome completo</label>
                                <input type="text" class="form-control" id="dep-2" name="dep-2">
                            </div>
                            <div class="col-md-6">
                                <label for="nasc-dep-2" class="form-label">Data de nascimento</label>
                                <input type="date" class="form-control" id="nasc-dep-2" name="nasc-dep-2">
                            </div>
                            <h4>Dependente 3</h4>
                            <div class="col-md-6">
                                <label for="dep-3" class="form-label">Nome completo</label>
                                <input type="text" class="form-control" id="dep-3" name="dep-3">
                            </div>
                            <div class="col-md-6">
                                <label for="nasc-dep-3" class="form-label">Data de nascimento</label>
                                <input type="date" class="form-control" id="nasc-dep-3" name="nasc-dep-3">
                            </div>
                            <h4>Dependente 4</h4>
                            <div class="col-md-6">
                                <label for="dep-4" class="form-label">Nome completo</label>
                                <input type="text" class="form-control" id="dep-4" name="dep-4">
                            </div>
                            <div class="col-md-6">
                                <label for="nasc-dep-4" class="form-label">Data de nascimento</label>
                                <input type="date" class="form-control" id="nasc-dep-4" name="nasc-dep-4">
                            </div>
                            <h4>Dependente 5</h4>
                            <div class="col-md-6">
                                <label for="dep-5" class="form-label">Nome completo</label>
                                <input type="text" class="form-control" id="dep-5" name="dep-5">
                            </div>
                            <div class="col-md-6">
                                <label for="nasc-dep-5" class="form-label">Data de nascimento</label>
                                <input type="date" class="form-control" id="nasc-dep-5" name="nasc-dep-5">
                            </div>
                            <div class="col-12">
                                <label for="your-message" class="form-label">Insira a descrição da sua necessidade.</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="5"
                                    required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <button type="button" id="botao-solicitar" onclick="cadSolicita();" class="btn btn-dark w-100 fw-bold">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php require_once 'view/parts/rodape.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <script>
        function cadSolicita(){
            const name = $("#name").val();
            const email = $("#email").val();
            const cpf = $("#cpf").val();
            const data_nasc = $("#data_nasc").val();
            const telephone = $("#telephone").val();
            const cep = $("#cep").val();
            const state = $("#state").val();
            const city = $("#city").val();
            const address = $("#address").val();
            const number = $("#number").val();
            const renda_familiar = $("#renda-familiar").val();
            const dep_1 = $("#dep-1").val();
            const nasc_dep_1 = $("#nasc_dep_1").val();
            const dep_2 = $("#dep-2").val();
            const nasc_dep_2 = $("#nasc_dep_2").val();
            const dep_3 = $("#dep-3").val();
            const nasc_dep_3 = $("#nasc_dep_3").val();
            const dep_4 = $("#dep-4").val();
            const nasc_dep_4 = $("#nasc_dep_4").val();
            const dep_5 = $("#dep-5").val();
            const nasc_dep_5 = $("#nasc_dep_5").val();
            const descricao = $("#descricao").val();

            $.ajax({
                url: '../assets/ajax/cadastra_solicitacao.php',
                method: 'post',
                data: {
                    name: names,
                    email: email,
                    cpf: cpf,
                    data_nasc: data_nasc,
                    telephone: telephone,
                    cep: cep,
                    state: state,
                    city: city,
                    address: address,
                    number: number,
                    renda_familiar: renda_familiar,
                    dep_1 : dep_1,
                    nasc_dep_1: nasc_dep_1,
                    dep_2 : dep_2,
                    nasc_dep_2: nasc_dep_2,
                    dep_3 : dep_3,
                    nasc_dep_3: nasc_dep_3,
                    dep_4 : dep_4,
                    nasc_dep_4: nasc_dep_4,
                    dep_5 : dep_5,
                    nasc_dep_5: nasc_dep_5,
                    descricao: descricao
                },
                beforeSend: function(){
                    $("#botao-solicitar").text('Enviando...');
                }
            })
            .done(function(obj) {
                if(obj == 'success'){
                    $("#botao-solicitar").text('Enviado!!!');
                }else{
                    alert('Ocorreu algum erro, Tente novamente.')
                    $("#botao-solicitar").text('Enviar');
                }
            })
        }
    </script>
</body>

</html>