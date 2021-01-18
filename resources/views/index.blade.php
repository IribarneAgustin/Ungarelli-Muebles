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
    <style>
        body {
            font-family: "Lato", sans-serif
        }

        .mySlides {
            display: none
        }
    </style>

</head>

<body>
    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="/" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><img src="/favicons//favicon.ico"></a>
            <a href="/galeria/muebles" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Muebles de oficina</a>
            <a href="/galeria/sillas" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Sillas y sillones</a>
            <a href="/galeria/estanterías" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Estanterías metálicas</a>
            <a href="/galeria/racks" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Racks</a>
            <a href="/galeria/muebles metálicos" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Muebles metálicos</a>
            <a href="/galeria/seguridad" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Seguridad</a>
            <a href="/galeria/accesorios" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Accesorios</a>
        </div>
    </div>
    <!-- Navbar small -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
        <a href="/galeria/muebles" class="w3-bar-item w3-button w3-padding-large">Muebles de oficina</a>
        <a href="/galeria/sillas" class="w3-bar-item w3-button w3-padding-large">Sillas y sillones</a>
        <a href="/galeria/estanterías" class="w3-bar-item w3-button w3-padding-large">Estanterías metálicas</a>
        <a href="/galeria/racks" class="w3-bar-item w3-button w3-padding-large">Racks</a>
        <a href="/galeria/muebles metálicos" class="w3-bar-item w3-button w3-padding-large">Muebles metálicos</a>
        <a href="/galeria/seguridad" class="w3-bar-item w3-button w3-padding-large">Seguridad</a>
        <a href="/galeria/accesorios" class="w3-bar-item w3-button w3-padding-large">Accesorios</a>
    </div>

    <!-- Header -->

    <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
        <img class="w3-image" src="/backgrounds/header.jpg" alt="Ungarelli Muebles" width="1500" height="100">
        <div class="w3-display-middle w3-margin-top w3-center">
            <h1 class="w3-xxlarge w3-text-white"><span><b><img class="w3-image" src="/logo/logo.png"> </b></span> <span class="w3-hide-small w3-text-dark-grey">Ungarelli Muebles</span></h1>
        </div>
    </header>


    <!-- Content -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="./image/k.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Los mejores muebles para oficina del mercado</h5>
                    <p>Más de 100 años de experiencia</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./image/b.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Reparaciones de sillas</h5>
                    <p>Contamos con más de 20 años de experiencia en la reparación de sillas de oficina</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./image/a.jpg" class="d-block w-100">
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

    <div class="container-fluid nosotros bg-primary ">
        <div class="row align-items-center">
            <div class="col-md-6 img-nosotros imagen-bg"></div>
            <div class="col-md-6 text-nosotros text-light">
                <div class="contenido">
                    <h2 class="mb-3 titutlo display-4">Quienes Somos?</h2>
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
                    </p>
                    <p>
                        Hoy puede disfrutar del resultado de un esfuerzo ambicioso planteado hace años y que
                        orgullosamente
                        lleva su nombre.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container productos  mt-4">
        <h2 class="text-center">Servicios</h2>

        <div class="row mt-4">
            <div class="card mb-3" style="max-width: 600px">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg" alt="..." class="img-fluid" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Reparaciones</h5>
                            <p class="card-text">
                                Conseguimos los mejores repuestos y pasamos presupuestos sin cargo.
                            </p>
                            <p class="card-text">
                                <small class="text-muted">Ver más</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3" style="max-width: 600px">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg" alt="..." class="img-fluid" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Tapizados</h5>
                            <p class="card-text">
                                Contamos con una alta variedad de telas, panas lavables y eco cueros.

                            </p>
                            <p class="card-text">
                                <small class="text-muted">Ver más</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <footer class="bg-light text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contacto</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                        aliquam voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
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