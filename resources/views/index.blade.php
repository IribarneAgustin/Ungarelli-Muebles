<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="icon" href="favicons/favicon.ico" type="image/ico" />
    <title>Ungarelli Muebles</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/stylefonts.css">

    <!-- Leaflet Maps -->

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
</head>

<body>
    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-center w3-card w3-white">
            <img src="/logo/logo.png" style=" width:auto; height: 40px !important;">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="/" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Inicio</a>
            <a href="#nuestrosArticulos" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Productos</a>
            <a href="#servicios" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Servicios</a>
            <a href="#contacto" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contacto</a>
        </div>
    </div>

    <!-- Navbar small -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
        <a href="/#nuestrosArticulos" class="w3-bar-item w3-button w3-padding-large ">Productos</a>
        <a href="#servicios" class="w3-bar-item w3-button w3-padding-large">Servicios</a>
        <a href="#contacto" class="w3-bar-item w3-button w3-padding-large">Contacto</a>
    </div>

    <!-- Header -->

    <div style="width:100%; height: auto !important;">
        <img src="./image/a.jpg" class="d-block w-100" alt="...">
    </div>


    <!-- Artículos -->
    <div class="container mt-4">
        <div class="text-center pt-3">
            <h2 id="nuestrosArticulos">Nuestros <b>Artículos</b></h2>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="text-center pt-3">
                    <h3>Muebles de oficina</h3>
                </div>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" style=" width:100%; height: 300px !important;">
                        <div class="carousel-item active" data-bs-interval="4000">
                            <img src="./image/directorio.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="./image/mueblesd.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="./image/5913.jpg" class="d-block w-100" alt="...">
                        </div>

                    </div>
                </div>
                <div class="text-center pt-3">
                    <a type="button" href="galeria/muebles" class="btn btn-warning"> Ver galería</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-center pt-3">
                    <h3>Sillas y sillones</h3>
                </div>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" style=" width:100%; height: 300px !important;">
                        <div class="carousel-item active" data-bs-interval="4000">
                            <img src="./image/sillas.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="./image/gamer.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="./image/sillasoffice.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="text-center pt-3">
                    <a type="button" href="galeria/sillas" class="btn btn-warning"> Ver galería</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-center pt-3">
                    <h3>Estanterías</h3>
                </div>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" style=" width:100%; height: 400px !important;">
                        <div class="carousel-item active" data-bs-interval="4000">
                            <img src="./image/estanterias.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="text-center pt-3">
                    <a type="button" href="galeria/estanterías" class="btn btn-warning"> Ver galería</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-center pt-3">
                    <h3>Racks</h3>
                </div>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="./image/rack.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="text-center pt-3">
                    <a type="button" href="galeria/racks" class="btn btn-warning"> Ver galería</a>
                </div>

            </div>
            <div class="col-sm-6">
                <div class="text-center pt-3">
                    <h3>Muebles metálicos</h3>
                </div>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" style=" width:100%; height: 400px !important;">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="./image/mueblesmetalicos.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="./image/mueblesmetalicos1.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="text-center pt-3">
                    <a type="button" href="galeria/muebles metálicos" class="btn btn-warning"> Ver galería</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-center pt-3">
                    <h3>Seguridad</h3>
                </div>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" style=" width:100%; height: 300px !important;">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="./image/gavetal.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="./image/seguridad.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="text-center pt-3">
                    <a type="button" href="galeria/seguridad" class="btn btn-warning"> Ver galería</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-center pt-3">
                    <h3>Accesorios</h3>
                </div>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="./image/percheros.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="text-center pt-3">
                    <a type="button" href="galeria/accesorios" class="btn btn-warning"> Ver galería</a>
                </div>
            </div>
        </div>
        <br>

        <!-- Servicios -->

        <div class="text-center pt-3">
            <h2 id="servicios"><b>Servicios</b></h2>
            <br>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="./image/Repuestos 2.jpg" class="card-img-top" alt="...">
                        <h4 class="card-title text-center"><b>Reparaciones de sillas y sillones</b></h4>
                        <p class="card-text">Realizamos presupuestos sin cargo con un amplio grado de detalle. Contamos con mas de 20 años de experiencia en las reparciones y disponemos de los mejores repuestos del país.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="./image/servicios.png" class="card-img-top" alt="...">
                        <h4 class="card-title text-center"><b>Tapizados</b></h4>
                        <p class="card-text">Contamos con una amplia variedad de eco cueros de buena calidad, asi como también de panas lavables, para dejar tu sillón como recién comprado. A su vez, rellenamos tanto asiento como respaldo para amortizar el desgaste.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- Quienes somos -->
    <div class="container-fluid nosotros bg-primary ">
        <div class="row align-items-center">
            <div class="col-md-6 img-nosotros imagen-bg"></div>
            <div class="col-md-6 text-nosotros text-light">
                <div class="contenido">
                    <h3 class="mb-3 titutlo display-4">Quienes Somos?</h3>
                    <p>La empresa fue fundada en 1903 por Don Pedro Ungarelli, un inmigrante que invirtió
                        su trabajo para el engrandecimiento de Mar del Plata.
                        Aquellos años marcaron el inicio de una vasta trayectoria empresarial que comienza con la
                        fabricación de las estructuras metálicas para los primeros edificios de más de un piso, con
                        la
                        herrería artística y las cocinas de importantes hoteles como Nogaró, Hermitage, Dora y Base
                        Naval entre otros. También realizó la herrería de torres tanque, chimeneas y mantenimiento
                        de
                        los chalets y estancias de la zona como Villa Victoria Ocampo, La Armonía y Estancia Peralta
                        Ramos.
                        A partir de la década del 60 incursiona en la fabricación de muebles y estanterías metálicas
                        en
                        todos sus tipos, agiornando las necesidades de la época y manteniéndose en la vanguardia
                        hasta
                        nuestros días.
                        De generación en generación, ha sabido adaptarse a las difíciles situaciones de la historia,
                        siendo
                        su mayor mérito sobrevivir a una globalización desmedida que generó el ingreso al país de
                        productos
                        de menor calidad y bajo precio, ofreciendo una durísima competencia.
                        Es una trayectoria que tomó riesgos, que respaldó corazonadas, pero por sobre todas las
                        cosas,
                        apostó a la calidad de sus productos, a la confianza de sus clientes y supo ajustarse a la
                        necesidad
                        de cada uno de ellos.
                        Hoy puede disfrutar del resultado de un esfuerzo ambicioso planteado hace años y que
                        orgullosamente
                        lleva su nombre.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo -->

    <div class="container mt-4">
        <div class="text-center">
            <img src="logo/logo.png">
        </div>
        <br>
    </div>
    <br>
    <div class="container mt-4">
        <div class="d-flex justify-content-center">
            <div class="slider">
                <ul class="slides">
                    <li><img src="/image/historia/comienzos.jpg" alt="imagen1" /><span>Los comienzos del taller</span></li>
                    <li><img src="/image/historia/comienzos1.jpg" alt="imagen1" /><span>Los comienzos del taller</span></li>
                    <li><img src="/image/historia/comienzos4.jpg" alt="imagen1" /><span>Mobiliario innovador de la época</span></li>
                    <li><img src="/image/historia/comienzos2.jpg" alt="imagen1" /><span>Instalaciones metálicas en la decada del 60</span></li>
                    <li><img src="/image/historia/comienzos3.jpg" alt="imagen1" /><span>Instalaciones metálicas en la decada del 60</span></li>
                    <li><img src="/image/historia/comienzos5.jpg" alt="imagen1" /><span>Instalaciones metálicas en la decada del 60</span></li>
                    <li><img src="/image/historia/comienzos6.jpg" alt="imagen1" /><span>Homenaje a nuestra trayectoria</span></li>
                    <li><img src="/image/historia/cortadora.jpg" alt="imagen1" /><span>Cortadora de principios del siglo</span></li>
                </ul>
                <div class="buttons">
                    <div class="next">&#10095;</div>
                    <div class="prev">&#10094;</div>
                </div>
            </div>
        </div>
    </div>

    <hr>


    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h4 id="contacto" class="text-uppercase"><b>CONTACTO</b></h4>
                    <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg> Av. Independencia 3244, Mar del plata, Buenos Aires, Argentina </p>
                    <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg> +54 0223 675 3244 </p>

                    <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg> Lunes a viernes 9:00 - 16:00 / Sábados 9:00 - 13:00</p>
                    <!--  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                    </svg>
                    -->
                    <hr>
                    <div class="text-center" style="background-color: #3B5998">

                        <a target="_blank" href="https://www.facebook.com/ungarelli.muebles" class="btn btn-block btn-social">
                            <span class="fa fa-facebook"></span>
                            <h5>Facebook </h5>
                        </a>

                        <a target="_blank" href="https://www.instagram.com/ungarellimuebles/" class="btn btn-block btn-social">
                            <span class="fa fa-instagram"></span>
                            <h5>Instagram</h5>
                        </a>

                    </div>


                </div>
                <!-- Map -->

                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">

                    <div id="mapid" style="height:300px"></div>

                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3 text-dark" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2012-2021 Ungarelli Muebles
        </div>

    </footer>

    <script>
        window.addEventListener('load', () => {


            // initial slide
            let slide = 1;

            // total slides
            let slides = document.querySelectorAll(".slider ul li");
            total = slides.length;

            // show first side
            showSlide(1);

            next = document.querySelector(".next");
            prev = document.querySelector(".prev")

            /**
             * event next button
             */
            next.addEventListener('click', (evt) => {
                evt.preventDefault();
                slide++;
                if (slide > total) {
                    slide = 1;
                }
                showSlide(slide);
            })

            /** 
             * event prev button
             */
            prev.addEventListener("click", (evt) => {
                evt.preventDefault();
                slide--;
                if (slide < 1) {
                    slide = total;
                }
                showSlide(slide);
            })

            /**
             * show slides
             * 
             * @param {number} n 
             * @return {null}
             * 
             */
            function showSlide(n) {
                n--; // decrement 1
                for (i = 0; i < slides.length; i++) {
                    (i == n) ? slides[n].style.display = "block": slides[i].style.display = "none";
                }
            }

        })
    </script>
    <script>
        var mymap = L.map('mapid').setView([-38.00885, -57.56277], 13);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYWd1c2lyaSIsImEiOiJja2tuYTloazMyYjZpMm5ud2N4M2d6anRlIn0.vCENfiMBKD7bm04FceNLsw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoiYWd1c2lyaSIsImEiOiJja2tuYTloazMyYjZpMm5ud2N4M2d6anRlIn0.vCENfiMBKD7bm04FceNLsw'
        }).addTo(mymap);

        var marker = L.marker([-38.00885, -57.56277]).addTo(mymap);
        marker.bindPopup("<b>Ungarelli Muebles</b><br> Av. Independencia 3244").openPopup();
    </script>



    <script>
        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }

        // When the user clicks anywhere outside of the modal, close it
        var modal = document.getElementById('ticketModal');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>



</body>

</html>