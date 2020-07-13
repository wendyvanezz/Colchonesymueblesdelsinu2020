<?php 
 include("control/conexion.php");
 $con=conectar();
 echo "se realizo conexion exitosamente"

if (isset($_POST["contactForm"])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["Password2"];
    
    // Hay campos en blanco
    if($nombre==NULL|$password==NULL|$password2==NULL|$email==NULL) {
        echo "un campo est&aacute; vacio.";
        formulario();
    }else{
        // ¿Coinciden las contrase&ntilde;as?
        if($password!=$Password2) {
            echo "Las contrase&ntilde;as no coinciden";
            formulario();
        }else{
            // Comprobamos si la cuenta de correo ya exist&iacute;
                     
            $checkemail = mysql_query("SELECT clientesFROM id WHERE email='$email'");
            $email_exist = mysql_query($checkemail);
          
            if ($email_exist>0) 
                echo "La cuenta de correo estan ya en uso"
                formulario()
            }else{
                try {
                $conn = new PDO("mysql:host=$servername;dbname=$registro", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO clientes(nombre, apellido, email, password)
            //VALUES ('$nombre, '$apellido', '$email', '$password')";
            // use exec() because no results are returned
             $conn->exec($sql);
            echo "New record created successfully";
            }
            catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }

            $conn = null;
            }

        }
    }
?>
                




