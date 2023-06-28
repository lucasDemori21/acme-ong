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
                    <h1 class="mb-3" style="overflow: hidden;">Contact Us</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="your-name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="your-name" name="your-name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="your-surname" class="form-label">Your Surname</label>
                                <input type="text" class="form-control" id="your-surname" name="your-surname" required>
                            </div>
                            <div class="col-md-6">
                                <label for="your-email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="your-email" name="your-email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="your-subject" class="form-label">Your Subject</label>
                                <input type="text" class="form-control" id="your-subject" name="your-subject">
                            </div>
                            <div class="col-md-6">
                                <label for="your-name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="your-name" name="your-name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="your-surname" class="form-label">Your Surname</label>
                                <input type="text" class="form-control" id="your-surname" name="your-surname" required>
                            </div>
                            <div class="col-md-6">
                                <label for="your-email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="your-email" name="your-email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="your-subject" class="form-label">Your Subject</label>
                                <input type="text" class="form-control" id="your-subject" name="your-subject">
                            </div>
                            <div class="col-md-6">
                                <label for="your-name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="your-name" name="your-name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="your-surname" class="form-label">Your Surname</label>
                                <input type="text" class="form-control" id="your-surname" name="your-surname" required>
                            </div>
                            <div class="col-md-6">
                                <label for="your-email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="your-email" name="your-email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="your-subject" class="form-label">Your Subject</label>
                                <input type="text" class="form-control" id="your-subject" name="your-subject">
                            </div>
                            <div class="col-12">
                                <label for="your-message" class="form-label">Your Message</label>
                                <textarea class="form-control" id="your-message" name="your-message" rows="5"
                                    required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-dark w-100 fw-bold">Send</button>
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
</body>

</html>