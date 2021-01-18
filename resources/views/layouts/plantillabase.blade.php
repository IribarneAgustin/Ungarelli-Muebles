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
  
  <title>Ungarelli Muebles | Galería</title>
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

  <div style="background-color: #DEDFE0">
    <div class="container" id="gallery">
      @yield('contenido')
    </div>
  </div>

  @yield('js')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>

</body>

</html>