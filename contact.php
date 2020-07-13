<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Muebles & Colchones del Sinu</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger fixed-top">
    <div class="container">
      <a href="index.php"><img class="img-circle" src="logop.png" style="margin-right: 10px" ></a>
      <a class="navbar-brand" href="index.php">Muebles & Colchones del Sinu</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <li class="nav-item">
            <a class="nav-link" href="promo.php">Promociones</a>
          </li>
            <a class="nav-link" href="about.php">Conocenos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contactanos</a>
          </li>
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Portafolio
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-1-col.php">1 Colchones y Bases Cama</a>
              <a class="dropdown-item" href="portfolio-2-col.php">2 Juegos de Alcobas</a>
              <a class="dropdown-item" href="portfolio-3-col.php">3 Juegos de Sala </a>
              <a class="dropdown-item" href="portfolio-4-col.php">4 Juegos de Comedor </a>
              <a class="dropdown-item" href="portfolio-5-col.php">5 Closet </a>
              <a class="dropdown-item" href="portfolio-6-col.php">6 Accesorios en Madera</a>
              <a class="dropdown-item" href="portfolio-7-col.php">7 Mecedoras</a>
              <a class="dropdown-item" href="portfolio-8-col.php">8 Muebles Rusticos</a>
              </div>
          </li>
        </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Contactenos
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Inicio</a>
      </li>
      <li class="breadcrumb-item active">Contactame</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-8">
        <!-- Embedded Google Map -->
        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3>Detalles de Contacto</h3>
        <p>
          Cra 5 35-57
          <br>Monteria, Colombia
          <br>
        </p>
        <p>
          <abbr title="Phone">Celular</abbr>: (4) 320 5479803
        </p>
        <p>
          <abbr title="Email">Email</abbr>:
          <a href="mailto:name@example.com">mueblesycolchonesdelsinu2019@gmail.com
          </a>
        </p>
        <p>
          <abbr title="Hours">Horario</abbr>: Lunes - Domingo: 7:00 AM to 6:30 PM
        </p>
      </div>
    </div>
    <!-- /.row -->
   <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Deje su Mensaje</h3>
        <form method= "post" action= "contact_me.php"  name="contactForm" id="contactForm" novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label>Nombre Completo:</label>
              <input type="text" class="form-control"name="name" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Numero de Telefono:</label>
              <input type="tel" class="form-control" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Correo Electronico:</label>
              <input type="email" class="form-control" name= "email" id="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Mensaje:</label>
              <textarea rows="10" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar Mensaje</button>
          <div id="respuesta" style="display: none;"></div>
          </form>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-danger">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->

    </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <!--script src="js/jqBootstrapValidation.js"></script-->

</body>

</html>
