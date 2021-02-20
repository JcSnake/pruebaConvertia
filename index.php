<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once('./template/head.php') ?>
</head>
<body>
    <?php include_once('./template/header.php') ?>
    <section id="home" class="row h-100 w-100 mx-auto d-desktop">
        <div class="col-xs-12 col-md-6 bg-home-img-team">
            <div class="d-flex align-items-center justify-content-center h-100">
                <div>
                    <h1 class="text-uppercase text-head w450">inigualable</h1>
                    <h1 class="text-uppercase text-head w500">incomparable</h1>
                    <h1 class="text-uppercase text-head w350">increíble</h1>
                    <a href="contrata-hoy.php" class="col-12 col-md-6 btn btn-blue text-uppercase mt-4">Contrata hoy</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 bg-home-img-guy">
            <div class="w-100 h-100 d-flex align-items-center">
                <div class="w-80 mx-auto">
                    <a href="cliente.php" class="col-7 btn btn-orange text-uppercase mt-50">Eres cliente y necesitas ayuda</a>
                </div>
            </div>
        </div>
    </section>
    <section id="homeMobile" class="h-100 w-100 mx-auto d-mobile">
        <div id="carouselExampleControls" class="carousel slide h-100" data-bs-ride="carousel">
            <div class="carousel-inner h-100">
                <div class="carousel-item active h-100">
                    <div class="col-12 col-md-6 bg-home-img-team">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <div class="col-10 m-auto pt-150">
                                <h1 class="text-uppercase text-head w450">inigualable</h1>
                                <h1 class="text-uppercase text-head w500">incomparable</h1>
                                <h1 class="text-uppercase text-head w350">increíble</h1>
                                <a href="contrata-hoy.php" class="col-12 col-md-6 btn btn-blue text-uppercase mt-4">Contrata hoy</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <div class="col-12 col-md-6 bg-home-img-guy">
                        <div class="w-100 h-100 d-flex align-items-center pt-150">
                            <div class="w-80 mx-auto">
                                <a href="cliente.php" class="col-12 col-md-7 btn btn-orange text-uppercase mt-50">Eres cliente y necesitas ayuda</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <?php include_once('./template/footer.php') ?>
    <?php include_once('./template/scripts.php') ?>
</body>
</html>