<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once('./template/head.php') ?>
</head>
<body>
    <nav>
        <div class="col-10 col-md-11 mx-auto row">
            <div class="col-1 d-flex align-items-center">
                <i data-bs-toggle="modal" data-bs-target="#exampleModal" class="fas fa-phone-volume fs-45 c-blue icon-res"></i>
            </div>
            <div class="col-10 text-center">
                <a href="index.php"><img src="./assets/images/logo.png" alt=""></a>
            </div>
            <div class="col-1 d-flex align-items-center">
                <i class="fas fa-map-marker-alt fs-45 c-blue icon-res"></i>
            </div>
        </div>
    </nav>
    <section id="home" class="h-100 w-100 bg-cliente d-desktop">
        <div class="h-100 d-flex justify-content-center align-items-center">
            <div class="col-md-6 mx-auto text-center">
                <h1 class="c-white fs-80 fw-700">Chin,</h1>
                <h1 class="txt-italic c-white">¿algo no va bien?</h1>
                <button class="btn btn-blue text-uppercase mt-5 col-md-4">te ayudamos</button>
            </div>
        </div>
    </section>
    <section id="home" class="h-100 w-100 bg-cliente d-mobile">
        <div class="h-100 d-flex justify-content-center align-items-center">
            <div class="col-md-6 mx-auto text-center pt-150">
                <h1 class="c-white fs-80 fw-700">Chin,</h1>
                <h1 class="txt-italic c-white">¿algo no va bien?</h1>
                <button class="btn btn-blue text-uppercase mt-5 col-md-4">te ayudamos</button>
            </div>
        </div>
    </section>
    <section id="servicios">
        <div class="col-9 col-md-10 mx-auto text-center pt-4 pb-4">
            <p class="m-0 fw-500">Sabemos que la tecnología no siempre está de nuestro lado y los <span class="c-blue">inconvenientes suceden.</span></p>
            <p class="m-0 fw-500">Por ello, <span class="c-blue">ponemos a tu disposición nuestros canales de Servicio al Cliente para ayudarte</span> a <br> resolver aquellos fallos o dudas que tengas sobre:</p>
            <div class="row mx-auto mt-5">
                <div class="w-20-res w-20">
                    <img src="./assets/images/dinero.svg" width="70" alt="dinero">
                    <p class="mt-3 fs-15">Consulta de saldo</p>
                </div>
                <div class="w-20-res w-20">
                    <img src="./assets/images/ui.svg" width="60" alt="call">
                    <p class="mt-4 fs-15">Soporte Técnico Telefonía</p>
                </div>
                <div class="w-20-res w-20">
                    <img src="./assets/images/charla.svg" width="70" alt="charla">
                    <p class="mt-3 fs-15">Quejas y sugerencias</p>
                </div>
                <div class="w-20-res w-20">
                    <img src="./assets/images/wifi.svg" width="80" alt="wifi">
                    <p class="mt-3 fs-15">Soporte Técnico Internet</p>
                </div>
                <div class="w-20-res w-20">
                    <img src="./assets/images/monitor.svg" width="90" alt="monitor">
                    <p class="mt-3 fs-15">Soporte Técnico Televisión</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-blue">
        <div class="col-md-5 mx-auto row pt-4 pb-4">
            <div class="col-md-6 d-flex align-items-center txt-center">
                <i class="fas fa-envelope c-white fs-40"></i>
                <span class="c-white d-desktop"><a href="mailto:atencionclientes@mail.com" class="c-white ms-5 fs-12">atencionclientes@mail.com</a></span>
                <p class="c-white"><a href="mailto:atencionclientes@mail.com" class="c-white fs-12">atencionclientes@mail.com</a></p>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center txt-center">
                <i class="fas fa-phone-volume c-white fs-40"></i>
                <span class="c-white fs-12 ms-5 d-desktop">673 690 0100</span>
                <p class="c-white mt-3">673 690 0100</p>
            </div>
        </div>
    </section>
    <section id="oferta">
        <div class="col-md-6 mx-auto pt-4 pb-4 text-center fw-500">
            <p class="col-8 col-md-8 mx-auto">Aumenta tu velocidad de internet o cambia tu <span class="c-blue">Doble pack por un Triple pack</span> a un precio inigualable</p>
            <button class="btn btn-orange col-md-3 pt-2 pb-2 mt-3">Te ayudamos</button>
        </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog h-100 d-flex justify-content-center align-items-center">
            <div class="modal-content">
                <div class="pos-content text-center">
                    <h1 class="c-blue fw-700 text-uppercase">Inigualable</h1>
                    <div class="mt-5">
                        <p class="m-0 text-uppercase fw-700">tv interactiva + telefonía fija</p>
                        <p class="m-0 text-uppercase fw-700">a un precio <span class="c-blue">increíble</span></p>
                    </div>
                    <form class="mt-4">
                        <input type="text" placeholder="Tu teléfono" class="col-12">
                        <div class="w-100 text-start mt-2">
                            <input type="checkbox" name="politicas" id="politicas"><span class="ms-2 fs-9">He leído y acepto las políticas de privacidad</span>
                        </div>
                        <button class="btn btn-llamame text-uppercase mb-4 mt-3 col-8 col-md-12">Llámame</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('./template/footer.php') ?>
    <?php include_once('./template/scripts.php') ?>
</body>
</html>