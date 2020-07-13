
enlace a cuentas
<h3><div class="">
                            <a class="btn btn-danger" href="login.php">Ingresar</a><a style="margin-left: 10px"  class="btn btn-danger" href="register.php">Crear Cuenta</a></div> 


codigo para conectar a correo

rror_reporting(0);
$nombre = $_POST['nombre'];
$correo_electronico= $_POST['email'];
$poblacion = $_POST['poblacion'];
$sexo=$_POST['GrupoOpciones1'];
$aficiones=$_POST['comentarios'];
$radio= $_POST['GrupoOpciones2'];
$opinion=$_POST['opinion'];
$header = 'From: ' . $mail . ", de la poblacion ".$poblacion."\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "sexo" . $_POST['GrupoOpciones1'] . " \r\n";
$mensaje .= "aficiones " . $_POST['comentarios'] . " \r\n";
$mensaje .= "que opinas de nuestra pagina" . $_POST['GrupoOpciones2'] . " \r\n";
$mensaje .="danos tu opinion".$_POST['opinion'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'AKI PONES TU CORREO;
$asunto = 'AKI LO Q KIERAS';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'mensaje enviado correctamente';


//include("control/conexion.php");
// $con=conectar();
// echo "se realizo conexion exitosamente";
// Check for empty fields
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO cotizacion(name, phone, email, message)
//VALUES ('$nombre, '$phone', '$email', '$message')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<//br>" . $e->getMessage();
    }

$conn = null;
   
       
?>


 <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Contactenos
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Inicio</a>
      </li>
      <li class="breadcrumb-item active">Contactanos</li>
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
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

    <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="js/jqBootstrapValidation.js"></script>
  
</body>

</html>
