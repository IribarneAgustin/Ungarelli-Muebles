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


</head>


<body>
    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-center w3-card w3-white">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="/" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><img src="/favicons//favicon.ico">Inicio</a>
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

    <!-- Header 
    <div class="main">

        <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
            <img class="w3-image" src="/backgrounds/header.jpg" alt="Ungarelli Muebles" width="1500" height="100">

            <div class="w3-display-middle w3-margin-top w3-center">
                <h1 class="w3-xxlarge w3-text-white"><span><b><img class="w3-image" src="/logo/logo.png"> </b></span> <span class="w3-hide-small w3-text-dark-grey">Ungarelli Muebles</span></h1>
            </div>
        </header>
    </div>
   
    
    <div class="p-5 rounded-lg m-3" style="background-color: white">
        <h1 class="display-4"> <img class="w3-image" src="/logo/logo.png"> Ungarelli Muebles </h1>
        <p class="lead">Mar del plata - Tel +54 (0223) 541-0063 </p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
    -->

    <!-- Header -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="1500">
                <img src="./image/b.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="1500">
                <img src="./image/carousel.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="1500">
                <img src="./image/a.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <!--
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="./image/a.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Los mejores muebles para oficina del mercado</h5>
                    <p>Más de 100 años de experiencia</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./image/carousel.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Reparaciones de sillas</h5>
                    <p>Contamos con más de 20 años de experiencia en la reparación de sillas de oficina</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./image/b.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Reparaciones de sillas</h5>
                    <p>Contamos con más de 20 años de experiencia en la reparación de sillas de oficina</p>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>

-->
    <!-- Servicios -->
    <div class="container mt-4">
        <div class="text-center pt-3">
            <h2 id="servicios">Servicios</h2>
            <br>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="./image/Repuestos 2.jpg" class="card-img-top" alt="...">
                        <h5 class="card-title text-center"><b>Reparaciones de sillas y sillones</b></h5>
                        <p class="card-text">Realizamos presupuestos sin cargo con un amplio grado de detalle. Contamos con mas de 20 años de experiencia en las reparciones y disponemos de los mejores repuestos del país.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="./image/servicios.png" class="card-img-top" alt="...">
                        <h5 class="card-title text-center"><b>Tapizados</b></h5>
                        <p class="card-text">Contamos con una amplia variedad de eco cueros de buena calidad, asi como también de panas lavables, para dejar tu sillón como recién comprado. A su vez, rellenamos tanto asiento como respaldo para amortizar el desgaste.</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- Artículos -->
        <div class="container mt-4">
            <div class="text-center pt-3">
                <h2 id="nuestrosArticulos">Nuestros Artículos</h2>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="text-center pt-3">
                        <h3>Muebles de oficina</h3>
                    </div>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner ">
                            <div class="carousel-item active" data-bs-interval="6000">
                                <img src="./image/b.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="6000">
                                <img src="./image/a.jpg" class="d-block w-100" alt="...">
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
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="3000">
                                <img src="./image/b.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="./image/a.jpg" class="d-block w-100" alt="...">
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
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="3000">
                                <img src="./image/b.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="./image/a.jpg" class="d-block w-100" alt="...">
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
                                <img src="./image/b.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="./image/a.jpg" class="d-block w-100" alt="...">
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
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="3000">
                                <img src="./image/b.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="./image/a.jpg" class="d-block w-100" alt="...">
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
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="3000">
                                <img src="./image/b.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="./image/a.jpg" class="d-block w-100" alt="...">
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
                                <img src="./image/b.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="./image/a.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-3">
                        <a type="button" href="galeria/accesorios" class="btn btn-warning"> Ver galería</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
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

    <div class="container mt-4">

        <div class="text-center">
            <img src="logo/logo.png">
        </div>
        <br>
    </div>






    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 id="contacto" class="text-uppercase"><b>CONTACTO</b></h5>
                    <p> Av. Independencia 3244 </p>
                    <p> Mar del plata, Buenos Aires, Argentina </p>
                    <p>+54 0223 541 0063 </p>

                </div>

                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <a target="_blank" href="https://www.facebook.com/ungarelli.muebles" class="btn btn-block btn-social btn-twitter">
                                <span class="fa fa-facebook"></span> Facebook
                            </a>
                        </li>

                        <li class="list-group-item"> <a target="_blank" href="https://www.instagram.com/ungarellimuebles/" class="btn btn-block btn-social btn-twitter">
                                <span class="fa fa-instagram"></span> Instagram
                            </a>
                        </li>
                        <li class="list-group-item"> <a target="_blank" href="https://api.whatsapp.com/send?phone=5492236753244" class="btn btn-block btn-social btn-whatsapp">
                                <span class="fa fa-whatsapp"></span> WhatsApp
                            </a>
                        </li>

                    </ul>


                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script>
        // Automatic Slideshow - change image every 4 seconds
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 4000);
        }

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