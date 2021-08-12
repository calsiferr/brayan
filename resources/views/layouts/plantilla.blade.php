<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
    <title>Document</title>
</head><style>
    .one{
        background: linear-gradient(70deg, gray, white) !important;
        transform: translatey(0px) !important;
        box-shadow: 0 30px 3px -25px !important;
        text-align: center;
    }
    .two{
        background: linear-gradient(150deg, #5fa8d2 60%, white) !important;
        border: none;
        border-bottom: 3px solid !important
    }

</style>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light one">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="inicio">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quienes-somos">QUIENES SOMOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acerca-de">ACERCA DE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto">CONTACTO</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar-->

<div class="container">
    <div class="row">
        <!-- sidebar -->
        <div class="col-md-3 one">
            <br><br>
            <ul class="list-group">
                <li class="list-group-item active two" aria-current="true">correo</li>
                <li class="list-group-item active two">dos</li>
                <li class="list-group-item active two">tres</li>
                <li class="list-group-item active two">four</li>
                <li class="list-group-item active two">5</li>
            </ul>
            <br><br>
        </div>
        <!--End Sidebar -->
        <!-- Content--->
        <div class="col-md-9">
             @yield('contenido')
        </div>
        <!-- end Content-->
    </div>
</div>
<footer >
<footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #3b5998;"
        href="https://www.facebook.com/IOskarI/"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
</footer>


</body>
</html>
