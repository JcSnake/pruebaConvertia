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
    <section id="contrato-home" class="bg-contrata row h-100 w-100 mx-auto d-desktop">
        <div class="col-12 col-md-7 d-flex justify-content-center">
            <div class="mt-text">
                <h1>Internet <span class="text-uppercase fw-900">inigualable</span></h1>
                <h3>TV Interactiva + Telefonía Fija</h3>
                <div class="mt-3 div-white col-md-8 p-2">
                    <h3>Desde $449 al mes</h3>
                </div>
                <div class="mt-5">
                    <button class="btn btn-want rounden-0 col-md-6">Lo quiero</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex justify-content-center">
            <div class="col-md-8 mx-auto p-form">
                <div class="box-blue text-center">
                    <h6 class="c-white p-4 c-white m-0">¡Contrata ahora!</h6>
                </div>
                <div class="box-white text-center">
                    <div class="col-9 mx-auto pt-2">
                        <h6 class="c-blue m-0">Déjanos tu número y <br> te llamamos en segundo</h6>
                        <form class="mt-2">
                            <label for="celular" class="fs-12">Si es celular sin el 044 o 045</label>
                            <input id="telefono" type="text" placeholder="Tu teléfono" class="col-12">
                            <div class="w-100 text-start mt-2 d-flex">
                                <input type="checkbox" name="politicas" id="politicas"><span class="ms-2 fs-9">He leído y acepto las políticas de privacidad</span>
                            </div>
                            <button class="btn btn-llamame text-uppercase mb-4 mt-3 col-12">Llámame</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contrato-home-mobile" class="row h-100 w-100 mx-auto d-mobile">
        <div class="col-12 col-md-4 mt-3">
            <div class="col-md-8 mx-auto p-form">
                <div class="box-blue text-center">
                    <h6 class="c-white p-4 c-white m-0">¡Contrata ahora!</h6>
                </div>
                <div class="box-white text-center shadow-paquetes">
                    <div class="col-9 mx-auto pt-2">
                        <h6 class="c-blue m-0">Déjanos tu número y <br> te llamamos en segundo</h6>
                        <form class="mt-2">
                            <label for="celular" class="fs-12">Si es celular sin el 044 o 045</label>
                            <input id="telefono" type="text" placeholder="Tu teléfono" class="col-12">
                            <div class="w-100 text-start mt-2 d-flex">
                                <input type="checkbox" name="politicas" id="politicas"><span class="ms-2 fs-9">He leído y acepto las políticas de privacidad</span>
                            </div>
                            <button class="btn btn-llamame text-uppercase mb-4 mt-3 col-12">Llámame</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-7">
            <div class="mt-text text-center">
                <h1>Internet <span class="text-uppercase fw-900">inigualable</span></h1>
                <h3>TV Interactiva + Telefonía Fija</h3>
                <div class="mt-3 col-md-8 p-2">
                    <h3>Desde $449 al mes</h3>
                </div>
                <div class="mt-5">
                    <button class="btn btn-want rounden-0 col-12 col-md-6">Lo quiero</button>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-pleca">
        <div class="col-md-6 mx-auto d-flex justify-content-between align-items-center h-100">
            <div class="col-6 col-md-4 m-auto">
                <button class="btn btn-blue text-uppercase col-12 p-2 mt-res-20">triple pack</button>
            </div>
            <div class="col-6 col-md-4 m-auto">
                <button class="btn btn-blue text-uppercase col-12 p-2">doble pack</button>
            </div>
        </div>
    </div>
    <section id="paquetes" class="mb-5">
        <div class="col-md-10 mx-auto">
            <div>
                <div class="col-md-12 mx-auto row mt-5 shadow-paquetes p-4">
                    <div class="col-12 col-md-9 txt-center">
                        <img src="./assets/images/50mbps.png" alt="50mbps">
                        <span class="ms-3 fw-700 c-gray-dark d-desktop">+80 Canales + 50 Canales HD</span>
                        <p class="m-0 fw-700 c-gray-dark d-mobile">+80 Canales + 50 Canales HD</p>        
                        <div class="collapse" id="paquete5">
                            <div class="card card-body border-0">
                                <p class="fw-700 c-gray-dark"><span class="text-uppercase">telefonía fija: </span>Llamadas ilimitadas MEX/EUA/CAN/ Incluye llamadas ilimitadas a celular</p>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="./assets/images/wifi.svg" alt="wifi"><span class="ms-3 d-desktop">Conexión a internet</span>
                                        <p class="d-mobile mt-2">Conexión a internet</p>
                                    </div>
                                    <div class="col-12 col-md-6 row d-desktop">
                                        <div class="col-12 txt-center col-md-2">
                                            <img src="./assets/images/ui.svg" alt="wifi">
                                        </div>
                                        <div class="col-10 d-desktop">
                                            <span>Llamadas ilimitadas</span><br>
                                            <span>Nacionales | A EUA y Canadá | A móviles</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-mobile">
                                        <img src="./assets/images/ui.svg" alt="wifi">
                                        <p class="m-0 mt-2">Llamadas ilimitadas</p>
                                        <p class="m-0">Nacionales | A EUA y Canadá | A móviles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-end align-items-center">
                        <button class="btn btn-want text-uppercase col-12 h-btn">lo quiero</button>
                    </div>
                </div>
                <span class="pos-plus" data-bs-toggle="collapse" data-bs-target="#paquete5" aria-expanded="false" aria-controls="paquete5"><i class="fas fa-plus"></i></span>
            </div>
            <div>
                <div class="col-md-12 mx-auto row mt-5 shadow-paquetes p-4">
                    <div class="col-12 col-md-9 txt-center">
                        <img src="./assets/images/80mbps.png" alt="80mbps">
                        <span class="ms-3 fw-700 c-gray-dark d-desktop">+ 120 Canales + 90 Canales HD</span>
                        <p class="m-0 fw-700 c-gray-dark d-mobile">+ 120 Canales + 90 Canales HD</p>      
                        <div class="collapse" id="paquete80">
                            <div class="card card-body border-0">
                                <p class="fw-700 c-gray-dark"><span class="text-uppercase">telefonía fija: </span>Llamadas ilimitadas MEX/EUA/CAN/ Incluye llamadas ilimitadas a celular</p>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="./assets/images/wifi.svg" alt="wifi"><span class="ms-3 d-desktop">Conexión a internet</span>
                                        <p class="d-mobile mt-2">Conexión a internet</p>
                                    </div>
                                    <div class="col-12 col-md-6 row d-desktop">
                                        <div class="col-12 txt-center col-md-2">
                                            <img src="./assets/images/ui.svg" alt="wifi">
                                        </div>
                                        <div class="col-10 d-desktop">
                                            <span>Llamadas ilimitadas</span><br>
                                            <span>Nacionales | A EUA y Canadá | A móviles</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-mobile">
                                        <img src="./assets/images/ui.svg" alt="wifi">
                                        <p class="m-0 mt-2">Llamadas ilimitadas</p>
                                        <p class="m-0">Nacionales | A EUA y Canadá | A móviles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-end align-items-center">
                        <button class="btn btn-want text-uppercase col-12 h-btn">lo quiero</button>
                    </div>
                </div>
                <span class="pos-plus" data-bs-toggle="collapse" data-bs-target="#paquete80" aria-expanded="false" aria-controls="paquete80"><i class="fas fa-plus"></i></span>
            </div>
            <div>
                <div class="col-md-12 mx-auto row mt-5 shadow-paquetes p-4">
                    <div class="col-12 col-md-9 txt-center">
                        <img src="./assets/images/160mbps.png" alt="160mbps">
                        <span class="ms-3 fw-700 c-gray-dark d-desktop">+ 120 Canales + 90 Canales HD</span>
                        <p class="c-gray-dark d-mobile fw-700">+ 120 Canales + 90 Canales HD</p>   
                        <div class="collapse" id="paquete160">
                            <div class="card card-body border-0">
                                <p class="fw-700 c-gray-dark"><span class="text-uppercase">telefonía fija: </span>Llamadas ilimitadas MEX/EUA/CAN/ Incluye llamadas ilimitadas a celular</p>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="./assets/images/wifi.svg" alt="wifi"><span class="ms-3 d-desktop">Conexión a internet</span>
                                        <p class="d-mobile mt-2">Conexión a internet</p>
                                    </div>
                                    <div class="col-12 col-md-6 row d-desktop">
                                        <div class="col-12 txt-center col-md-2">
                                            <img src="./assets/images/ui.svg" alt="wifi">
                                        </div>
                                        <div class="col-10 d-desktop">
                                            <span>Llamadas ilimitadas</span><br>
                                            <span>Nacionales | A EUA y Canadá | A móviles</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-mobile">
                                        <img src="./assets/images/ui.svg" alt="wifi">
                                        <p class="m-0 mt-2">Llamadas ilimitadas</p>
                                        <p class="m-0">Nacionales | A EUA y Canadá | A móviles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-end align-items-center">
                        <button class="btn btn-want text-uppercase col-12 h-btn">lo quiero</button>
                    </div>
                </div>
                <span class="pos-plus" data-bs-toggle="collapse" data-bs-target="#paquete160" aria-expanded="false" aria-controls="paquete160"><i class="fas fa-plus"></i></span>
            </div>
            <div>
                <div class="col-md-12 mx-auto row mt-5 shadow-paquetes p-4">
                    <div class="col-12 col-md-9 txt-center">
                        <img src="./assets/images/200mbps.png" alt="200mbps">
                        <span class="ms-3 fw-700 c-gray-dark d-desktop">+ 120 Canales + 90 Canales HD</span>
                        <p class="c-gray-dark d-mobile fw-700 d-mobile">+ 120 Canales + 90 Canales HD</p>          
                        <div class="collapse" id="paquete200">
                            <div class="card card-body border-0">
                                <p class="fw-700 c-gray-dark"><span class="text-uppercase">telefonía fija: </span>Llamadas ilimitadas MEX/EUA/CAN/ Incluye llamadas ilimitadas a celular</p>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="./assets/images/wifi.svg" alt="wifi"><span class="ms-3 d-desktop">Conexión a internet</span>
                                        <p class="d-mobile mt-2">Conexión a internet</p>
                                    </div>
                                    <div class="col-12 col-md-6 row d-desktop">
                                        <div class="col-12 txt-center col-md-2">
                                            <img src="./assets/images/ui.svg" alt="wifi">
                                        </div>
                                        <div class="col-10 d-desktop">
                                            <span>Llamadas ilimitadas</span><br>
                                            <span>Nacionales | A EUA y Canadá | A móviles</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-mobile">
                                        <img src="./assets/images/ui.svg" alt="wifi">
                                        <p class="m-0 mt-2">Llamadas ilimitadas</p>
                                        <p class="m-0">Nacionales | A EUA y Canadá | A móviles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-end align-items-center">
                        <button class="btn btn-want text-uppercase col-12 h-btn">lo quiero</button>
                    </div>
                </div>
                <span class="pos-plus" data-bs-toggle="collapse" data-bs-target="#paquete200" aria-expanded="false" aria-controls="paquete200"><i class="fas fa-plus"></i></span>
            </div>
            <div>
                <div class="col-md-12 mx-auto row mt-5 shadow-paquetes p-4">
                    <div class="col-12 col-md-2 d-flex align-items-center">
                        <p class="c-gray-dark fw-700 text-uppercase txt-center">xview total 200</p>
                    </div>
                    <div class="col-12 col-md-7 txt-center">
                        <img src="./assets/images/200mbps.png" alt="200mbps">
                        <span class="ms-3 fw-700 c-gray-dark d-desktop">+ 80 Canales + 50 Canales HD</span>
                        <p class="c-gray-dark d-mobile fw-700 d-mobile">+ 80 Canales + 50 Canales HD</p>        
                        <div class="collapse" id="paquete200x">
                            <div class="card card-body border-0">
                                <p class="fw-700 c-gray-dark"><span class="text-uppercase">telefonía fija: </span>Llamadas ilimitadas MEX/EUA/CAN/ Incluye llamadas ilimitadas a celular</p>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="./assets/images/wifi.svg" alt="wifi"><span class="ms-3 d-desktop">Conexión a internet</span>
                                        <p class="d-mobile mt-2">Conexión a internet</p>
                                    </div>
                                    <div class="col-12 col-md-6 row d-desktop">
                                        <div class="col-12 txt-center col-md-2">
                                            <img src="./assets/images/ui.svg" alt="wifi">
                                        </div>
                                        <div class="col-10 d-desktop">
                                            <span>Llamadas ilimitadas</span><br>
                                            <span>Nacionales | A EUA y Canadá | A móviles</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-mobile">
                                        <img src="./assets/images/ui.svg" alt="wifi">
                                        <p class="m-0 mt-2">Llamadas ilimitadas</p>
                                        <p class="m-0">Nacionales | A EUA y Canadá | A móviles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-end align-items-center">
                        <button class="btn btn-want text-uppercase col-12 h-btn">lo quiero</button>
                    </div>
                </div>
                <span class="pos-plus" data-bs-toggle="collapse" data-bs-target="#paquete200x" aria-expanded="false" aria-controls="paquete200x"><i class="fas fa-plus"></i></span>
            </div>
            <div>
                <div class="col-md-12 mx-auto row mt-5 shadow-paquetes p-4">
                    <div class="col-12 col-md-2 d-flex align-items-center">
                        <p class="c-gray-dark fw-700 text-uppercase txt-center">xview total 350</p>
                    </div>
                    <div class="col-12 col-md-7 txt-center">
                        <img src="./assets/images/350mbps.png" alt="350mbps">
                        <span class="ms-3 fw-700 c-gray-dark d-desktop">+ 80 Canales + 50 Canales HD</span>
                        <p class="c-gray-dark d-mobile fw-700 d-mobile">+ 80 Canales + 50 Canales HD</p>     
                        <div class="collapse" id="paquete350x">
                            <div class="card card-body border-0">
                                <p class="fw-700 c-gray-dark"><span class="text-uppercase">telefonía fija: </span>Llamadas ilimitadas MEX/EUA/CAN/ Incluye llamadas ilimitadas a celular</p>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="./assets/images/wifi.svg" alt="wifi"><span class="ms-3 d-desktop">Conexión a internet</span>
                                        <p class="d-mobile mt-2">Conexión a internet</p>
                                    </div>
                                    <div class="col-12 col-md-6 row d-desktop">
                                        <div class="col-12 txt-center col-md-2">
                                            <img src="./assets/images/ui.svg" alt="wifi">
                                        </div>
                                        <div class="col-10 d-desktop">
                                            <span>Llamadas ilimitadas</span><br>
                                            <span>Nacionales | A EUA y Canadá | A móviles</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-mobile">
                                        <img src="./assets/images/ui.svg" alt="wifi">
                                        <p class="m-0 mt-2">Llamadas ilimitadas</p>
                                        <p class="m-0">Nacionales | A EUA y Canadá | A móviles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-end align-items-center">
                        <button class="btn btn-want text-uppercase col-12 h-btn">lo quiero</button>
                    </div>
                </div>
                <span class="pos-plus" data-bs-toggle="collapse" data-bs-target="#paquete350x" aria-expanded="false" aria-controls="paquete350x"><i class="fas fa-plus"></i></span>
            </div>
            <div>
                <div class="col-md-12 mx-auto row mt-5 shadow-paquetes p-4">
                    <div class="col-12 col-md-2 d-flex align-items-center">
                        <p class="c-gray-dark fw-700 text-uppercase txt-center">xview total 500</p>
                    </div>
                    <div class="col-12 col-md-7 txt-center">
                        <img src="./assets/images/500mbps.png" alt="500mbps">
                        <span class="ms-3 fw-700 c-gray-dark d-desktop">+ 80 Canales + 50 Canales HD</span>
                        <p class="c-gray-dark d-mobile fw-700 d-mobile">+ 80 Canales + 50 Canales HD</p>    
                        <div class="collapse" id="paquete500x">
                            <div class="card card-body border-0">
                                <p class="fw-700 c-gray-dark"><span class="text-uppercase">telefonía fija: </span>Llamadas ilimitadas MEX/EUA/CAN/ Incluye llamadas ilimitadas a celular</p>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="./assets/images/wifi.svg" alt="wifi"><span class="ms-3 d-desktop">Conexión a internet</span>
                                        <p class="d-mobile mt-2">Conexión a internet</p>
                                    </div>
                                    <div class="col-12 col-md-6 row d-desktop">
                                        <div class="col-12 txt-center col-md-2">
                                            <img src="./assets/images/ui.svg" alt="wifi">
                                        </div>
                                        <div class="col-10 d-desktop">
                                            <span>Llamadas ilimitadas</span><br>
                                            <span>Nacionales | A EUA y Canadá | A móviles</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-mobile">
                                        <img src="./assets/images/ui.svg" alt="wifi">
                                        <p class="m-0 mt-2">Llamadas ilimitadas</p>
                                        <p class="m-0">Nacionales | A EUA y Canadá | A móviles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-end align-items-center">
                        <button class="btn btn-want text-uppercase col-12 h-btn">lo quiero</button>
                    </div>
                </div>
                <span class="pos-plus" data-bs-toggle="collapse" data-bs-target="#paquete500x" aria-expanded="false" aria-controls="paquete500x"><i class="fas fa-plus"></i></span>
            </div>
            <div>
                <div class="col-md-12 mx-auto row mt-5 shadow-paquetes p-4">
                    <div class="col-12 col-md-2 d-flex align-items-center">
                        <p class="c-gray-dark fw-700 text-uppercase txt-center">xview total 1GB</p>
                    </div>
                    <div class="col-12 col-md-7 txt-center">
                        <img src="./assets/images/1000mbps.png" alt="1000mbps">
                        <span class="ms-3 fw-700 c-gray-dark d-desktop">+ 80 Canales + 50 Canales HD</span>
                        <p class="c-gray-dark d-mobile fw-700 d-mobile">+ 80 Canales + 50 Canales HD</p>        
                        <div class="collapse" id="paquete1000x">
                            <div class="card card-body border-0">
                                <p class="fw-700 c-gray-dark"><span class="text-uppercase">telefonía fija: </span>Llamadas ilimitadas MEX/EUA/CAN/ Incluye llamadas ilimitadas a celular</p>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="./assets/images/wifi.svg" alt="wifi"><span class="ms-3 d-desktop">Conexión a internet</span>
                                        <p class="d-mobile mt-2">Conexión a internet</p>
                                    </div>
                                    <div class="col-12 col-md-6 row d-desktop">
                                        <div class="col-12 txt-center col-md-2">
                                            <img src="./assets/images/ui.svg" alt="wifi">
                                        </div>
                                        <div class="col-10 d-desktop">
                                            <span>Llamadas ilimitadas</span><br>
                                            <span>Nacionales | A EUA y Canadá | A móviles</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-mobile">
                                        <img src="./assets/images/ui.svg" alt="wifi">
                                        <p class="m-0 mt-2">Llamadas ilimitadas</p>
                                        <p class="m-0">Nacionales | A EUA y Canadá | A móviles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-end align-items-center">
                        <button class="btn btn-want text-uppercase col-12 h-btn">lo quiero</button>
                    </div>
                </div>
                <span class="pos-plus" data-bs-toggle="collapse" data-bs-target="#paquete1000x" aria-expanded="false" aria-controls="paquete1000x"><i class="fas fa-plus"></i></span>
            </div>
        </div>
    </section>
    <div class="bg-pleca-2 mt-58">
        <div class="col-md-6 mx-auto d-flex justify-content-between align-items-center h-100">
            <div class="col-6 col-md-4 m-auto">
                <button class="btn btn-blue text-uppercase col-12 p-2 mt-res-20">triple pack</button>
            </div>
            <div class="col-6 col-md-4 m-auto">
                <button class="btn btn-blue text-uppercase col-12 p-2">doble pack</button>
            </div>
        </div>
    </div>
    <section id="paquetes-velocidad" class="mb-5">
        <div class="col-md-10 mx-auto">
            <div>
                <div class="col-md-12 mx-auto row mt-5 shadow-paquetes p-4">
                    <div class="col-12 col-md-9 txt-center">
                        <div class="d-flex align-items-center h-50">
                            <p class="ms-3 fw-700 c-gray-dark m-0">Hasta 50 Mbps de velocidad + Llamadas ilimitadas</p>        
                        </div>
                        <div class="collapse" id="paquete50">
                            <div class="card card-body border-0">
                                <p class="fw-700 c-gray-dark"><span class="text-uppercase">telefonía fija: </span>Llamadas ilimitadas MEX/EUA/CAN/ Incluye llamadas ilimitadas a celular</p>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="./assets/images/wifi.svg" class="uk-animation-stroke" alt="wifi" uk-svg="stroke-animation: true"><span class="ms-3 d-desktop">Conexión a internet</span>
                                        <p class="d-mobile mt-2">Conexión a internet</p>
                                    </div>
                                    <div class="col-12 col-md-6 row d-desktop">
                                        <div class="col-12 txt-center col-md-2">
                                            <img src="./assets/images/ui.svg" alt="wifi">
                                        </div>
                                        <div class="col-10 d-desktop">
                                            <span>Llamadas ilimitadas</span><br>
                                            <span>Nacionales | A EUA y Canadá | A móviles</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-mobile">
                                        <img src="./assets/images/ui.svg" alt="wifi">
                                        <p class="m-0 mt-2">Llamadas ilimitadas</p>
                                        <p class="m-0">Nacionales | A EUA y Canadá | A móviles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-end align-items-center">
                        <button class="btn btn-want text-uppercase col-12 h-btn">lo quiero</button>
                    </div>
                </div>
                <span class="pos-plus" data-bs-toggle="collapse" data-bs-target="#paquete50" aria-expanded="false" aria-controls="paquete50"><i class="fas fa-plus"></i></span>
            </div>
            <div>
                <div class="col-md-12 mx-auto row mt-5 shadow-paquetes p-4">
                    <div class="col-12 col-md-9 txt-center">
                        <div class="d-flex align-items-center h-50">
                            <p class="ms-3 fw-700 c-gray-dark m-0">Hasta 100 Mbps de velocidad + Llamadas ilimitadas</p>        
                        </div>
                        <div class="collapse" id="paquete100">
                            <div class="card card-body border-0">
                                <p class="fw-700 c-gray-dark"><span class="text-uppercase">telefonía fija: </span>Llamadas ilimitadas MEX/EUA/CAN/ Incluye llamadas ilimitadas a celular</p>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="./assets/images/wifi.svg" alt="wifi"><span class="ms-3 d-desktop">Conexión a internet</span>
                                        <p class="d-mobile mt-2">Conexión a internet</p>
                                    </div>
                                    <div class="col-12 col-md-6 row d-desktop">
                                        <div class="col-12 txt-center col-md-2">
                                            <img src="./assets/images/ui.svg" alt="wifi">
                                        </div>
                                        <div class="col-10 d-desktop">
                                            <span>Llamadas ilimitadas</span><br>
                                            <span>Nacionales | A EUA y Canadá | A móviles</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-mobile">
                                        <img src="./assets/images/ui.svg" alt="wifi">
                                        <p class="m-0 mt-2">Llamadas ilimitadas</p>
                                        <p class="m-0">Nacionales | A EUA y Canadá | A móviles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-end align-items-center">
                        <button class="btn btn-want text-uppercase col-12 h-btn">lo quiero</button>
                    </div>
                </div>
                <span class="pos-plus" data-bs-toggle="collapse" data-bs-target="#paquete100" aria-expanded="false" aria-controls="paquete100"><i class="fas fa-plus"></i></span>
            </div>
            <div>
                <div class="col-md-12 mx-auto row mt-5 shadow-paquetes p-4">
                    <div class="col-12 col-md-9 txt-center">
                        <div class="d-flex align-items-center h-50">
                            <p class="ms-3 fw-700 c-gray-dark m-0">Hasta 200 Mbps de velocidad + Llamadas ilimitadas</p>        
                        </div>
                        <div class="collapse" id="paquete200">
                            <div class="card card-body border-0">
                                <p class="fw-700 c-gray-dark"><span class="text-uppercase">telefonía fija: </span>Llamadas ilimitadas MEX/EUA/CAN/ Incluye llamadas ilimitadas a celular</p>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="./assets/images/wifi.svg" alt="wifi"><span class="ms-3 d-desktop">Conexión a internet</span>
                                        <p class="d-mobile mt-2">Conexión a internet</p>
                                    </div>
                                    <div class="col-12 col-md-6 row d-desktop">
                                        <div class="col-12 txt-center col-md-2">
                                            <img src="./assets/images/ui.svg" alt="wifi">
                                        </div>
                                        <div class="col-10 d-desktop">
                                            <span>Llamadas ilimitadas</span><br>
                                            <span>Nacionales | A EUA y Canadá | A móviles</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-mobile">
                                        <img src="./assets/images/ui.svg" alt="wifi">
                                        <p class="m-0 mt-2">Llamadas ilimitadas</p>
                                        <p class="m-0">Nacionales | A EUA y Canadá | A móviles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-end align-items-center">
                        <button class="btn btn-want text-uppercase col-12 h-btn">lo quiero</button>
                    </div>
                </div>
                <span class="pos-plus" data-bs-toggle="collapse" data-bs-target="#paquete200" aria-expanded="false" aria-controls="paquete200"><i class="fas fa-plus"></i></span>
            </div>
            <div>
                <div class="col-md-12 mx-auto row mt-5 shadow-paquetes p-4">
                    <div class="col-12 col-md-9 txt-center">
                        <div class="d-flex align-items-center h-50">
                            <p class="ms-3 fw-700 c-gray-dark m-0">Hasta 350 Mbps de velocidad + Llamadas ilimitadas</p>        
                        </div>
                        <div class="collapse" id="paquete350">
                            <div class="card card-body border-0">
                                <p class="fw-700 c-gray-dark"><span class="text-uppercase">telefonía fija: </span>Llamadas ilimitadas MEX/EUA/CAN/ Incluye llamadas ilimitadas a celular</p>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="./assets/images/wifi.svg" alt="wifi"><span class="ms-3 d-desktop">Conexión a internet</span>
                                        <p class="d-mobile mt-2">Conexión a internet</p>
                                    </div>
                                    <div class="col-12 col-md-6 row d-desktop">
                                        <div class="col-12 txt-center col-md-2">
                                            <img src="./assets/images/ui.svg" alt="wifi">
                                        </div>
                                        <div class="col-10 d-desktop">
                                            <span>Llamadas ilimitadas</span><br>
                                            <span>Nacionales | A EUA y Canadá | A móviles</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-mobile">
                                        <img src="./assets/images/ui.svg" alt="wifi">
                                        <p class="m-0 mt-2">Llamadas ilimitadas</p>
                                        <p class="m-0">Nacionales | A EUA y Canadá | A móviles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-end align-items-center">
                        <button class="btn btn-want text-uppercase col-12 h-btn">lo quiero</button>
                    </div>
                </div>
                <span class="pos-plus" data-bs-toggle="collapse" data-bs-target="#paquete350" aria-expanded="false" aria-controls="paquete350"><i class="fas fa-plus"></i></span>
            </div>
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