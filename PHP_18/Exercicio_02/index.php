<?php


?>

<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Documento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Navbar</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                        
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <?php for($i=0; $i<count($carouseis); $i++): ?>
                                <?php if($i == 0): ?>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <?php else: ?>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>" aria-label="Slide 2"></button>
                                <?php endif; ?>
                            <?php endfor; ?>
                            </div>
                            <div class="carousel-inner">
                            <?php foreach($carouseis as $i => $c): ?>
                                <div class="carousel-item <?= ($i == 0) ? "active" : ""; ?>">
                                    <img src="<?= $c->img ?>" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><?= $c->titulo ?></h5>
                                        <p><?= $c->texto ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                                
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                </div>
            </div>
        </div>
    </header>
    <main class="container  my-5 py-4">
        <div class="row">
            <h2 class="col-12 text-center">Produtos</h2>
            <div class="col-12 d-flex justify-content-center flex-wrap gap-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://mediamarkt.pt/cdn/shop/files/iPhone_13_Midnight_PDP_Image_Position-1A__WWEN-removebg-preview_grande.png?v=1684759395" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://mediamarkt.pt/cdn/shop/files/iPhone_13_Midnight_PDP_Image_Position-1A__WWEN-removebg-preview_grande.png?v=1684759395" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://mediamarkt.pt/cdn/shop/files/iPhone_13_Midnight_PDP_Image_Position-1A__WWEN-removebg-preview_grande.png?v=1684759395" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://mediamarkt.pt/cdn/shop/files/iPhone_13_Midnight_PDP_Image_Position-1A__WWEN-removebg-preview_grande.png?v=1684759395" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://mediamarkt.pt/cdn/shop/files/iPhone_13_Midnight_PDP_Image_Position-1A__WWEN-removebg-preview_grande.png?v=1684759395" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://mediamarkt.pt/cdn/shop/files/iPhone_13_Midnight_PDP_Image_Position-1A__WWEN-removebg-preview_grande.png?v=1684759395" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="container-fluid">
        <div class="row bg-danger text-white text-center py-3">
            <div class="col-12 p-0">
                CopyRight &copy; João Ramos 2023
            </div>
        </div>
    </footer>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>