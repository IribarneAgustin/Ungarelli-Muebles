<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('css')
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css" rel="stylesheet" />

  <!-- Fonts -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/stylefonts.css">

  <title>Ungarelli Muebles | Galería</title>
</head>

<body>
  <div class="w3-top">
    <!-- Navbar -->
    <div class="w3-center w3-card w3-white">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="/" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><img src="/favicons//favicon.ico">Inicio</a>
      <a href="/nuestrosArticulos" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Productos</a>
      <a href="/servicios" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Servicios</a>
      <a href="/contacto" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contacto</a>
    </div>
  </div>
  <!-- Navbar small -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="/" class="w3-bar-item w3-button w3-padding-large"><img src="/favicons//favicon.ico">Inicio</a>
    <a href="#nuestrosArticulos" class="w3-bar-item w3-button w3-padding-large ">Productos</a>
    <a href="#servicios" class="w3-bar-item w3-button w3-padding-large">Servicios</a>
    <a href="#contacto" class="w3-bar-item w3-button w3-padding-large">Contacto</a>
  </div>

  <div style="background-color: #FFFFFF">
    <div class="container gallery" id="gallery">
      @yield('contenido')
    </div>
  </div>

  @yield('js')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>
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
  </script>

</body>

</html>