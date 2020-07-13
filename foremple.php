
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
          <li class="nav-item active">
            <a class="nav-link" href="#">Promociones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">Conocenos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contactanos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Portfolio
            </a>
           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-1-col.php">1 Colchones y Bases Cama</a>
              <a class="dropdown-item" href="portfolio-2-col.php">2 Juegos de Alcobas</a>
              <a class="dropdown-item" href="portfolio-3-col.php">3 Juegos de Sala </a>
              <a class="dropdown-item" href="portfolio-4-col.php">4 Juegos de Comedor </a>
              <a class="dropdown-item" href="portfolio-5-col.php">5 Closet </a>
              <a class="dropdown-item" href="portfolio-6-col.php">6 Accesorios en Madera</a>
              <a class="dropdown-item" href="portfolio-7-col.php">7 Accesorios en Madera</a>
          </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
   <!-- Image Header -->
    <img class="img-fluid rounded mb-4" src="logo.png" alt="">

  <title>Registro de Clientes</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>


<script type="text/javascript">
//Funcion Validar
    funtion validar()
    {          
        valor=document.getElementById("Nombres").value;
        var bol
        var msg

        if(valor== null || valor.length ==0 || /^\s+$/.test(valor))
        {
            return false
        }
        if(form.elements["ApellidoP"].value=="")
        {
            msg+="\n Apellido Paterno"
            bol=false
        }
         if(form.elements["ApellidoM"].value=="")
         {
            msg+="\n Apellido Materno \n"
            bol=false
         }
          if(form.elements["mail"].value=="")
          {
            msg+="\n E-mail \n"
            bol=false
         }
          if(form.elements["NumeroDocumento"].value=="")
          {
            msg+="\n NumeroDocumento \n"
            bol=false
         }
          if(form.elements["Celular"].value=="")
          {
            msg+="\n Celular \n"
            bol=false
         }
         if (bol==false) {
			alert("Ingrese los valores")
		}
		else
		{
			alert("Se ingresaron bien los valores")
		}

    }
    //Funcion Contraseña
    funtion Contraseña()
    {
        var a=document.getElementById('password2').value;
        var b=document.getElementById('password1').value;

        if(a==b)
        {
            alert('Contraseña Correcta');
        }
        if(a!=b)
        {
            alert('Las Contraseñas No Coinciden')
        }
    }

</script>

<body>
     <div id="container">
        <div id="header">
            <h1>Colombina</h1>
            <div id="nav">
                <ul> <!-- ul etiqueta para crear lista  -->
                    <li> <a href="Index.html" class="link"> Inicio </a> </li>	<!-- li objeto de información dentro de una lista ul -->
                    <li> <a href="Product.html" class="link"> Productos </a> </li>
                    <li> <a href="#" class="link"> Quienes Somos </a> </li>
                    <li> <a href="#" class="link"> Proveedores </a> </li>  
                    <li> <a href="#" class="link"> Contactenos </a> </li>  
                    <li> <a href="Login.html" class="link"> <img class="login" src="img\login.png"> </a> </li>  
                 </ul>
            </div> <!--Finalizacion del nav -->
        </div> <!--Finalizacion del menu -->
    
        <div id="section-form">
            <center>
            <div id="cont-registry">
                <h2 id="fr"> Formulario de registro </h2>
                <hr>
                <p id="p2">COMPLETA TUS DATOS PERSONALES </p>
                <p id="p3">*Campos obligatorios</p>
                <hr>

                <form name="form" id="form" method="post" onsubmit="return validar(this)">
                    <label class="f"> Nombres*</label>
                    <input type= "text" name="Nombres" id="Nombres" required/>
                    <br>
                    <br>
                    <label class="f"> Paterno* </label> 
                    <input type= "text" name="ApellidoP" id="ApellidoP" required/>
                    <br />
                    <br />
                    <label class="f"> Materno* </label>
                    <input type= "text" name="ApellidoM" id="ApellidoM" required/>
                    <br />
                    <br />
                    <label class="f"> E-mail* </label> 
                    <input type="text" name="mail" placeholder= "ejemplo@gmail.com" id="mail" required/>
                    <br />
                    <br />
                    <label class="f"> Contraseña* </label>
                    <input type="password" id="password1" required />
                    <br />
                    <br />
                    <label class="f"> Confirmar Contraseña* </label>
                    <input type="password" id= "password2" required />
                    <br />
                    <br />
                    <label class="f"> Pais de Residencia* </label>
                    <select class="Select" name="PaisResidencia" required>
                        <option> Alemania</option>
                        <option> Argentina</option>
                        <option> Armenia</option>
                        <option> Australia</option>
                        <option> Bolivia</option>
                        <option> Brasil</option>
                        <option> Canada</option>
                        <option> Chile</option>
                        <option> Colombia</option>
                        <option> Ecuador</option>
                        <option> Egipto</option>
                        <option> España</option>
                        <option> Estados Unidos</option>
                        <option> Francia</option>
                        <option> Italia</option>
                        <option> Mexico</option>
                        <option> Puerto Rico</option>
                        <option> Suiza</option>
                    </select>
                    <br />
                    <br />
                    <label class="f"> Tipo de Documento*</label>
                        <select class="Select" name="TipoDocumento" required>
                           <option>Cedula de Ciudadania</option>
                           <option>Cedula Extranjera</option>  
                        </select>
                    <br>
                    <br>
                    <label class="f"> Numero de Documento* </label>
                        <input type="text" name="NumeroDocumento" id="NumeroDocumento" required>
                        <br>
                        <br> 
                   <label class="f"> Genero* </label>
                        <input type="radio" name="Genero" id="GeneroM"  value="Maculino" > M
                        <input type="radio" name="Genero" id="GeneroF"  value="Femenino"> F
                        <br>
                        <br> 
                    <label class="f"> Fecha de Nacimiento* </label>
                        <select name="dia" id="Fecha" required>
                            <option> Día </option>
                            <option> 1 </option>
                            <option> 2 </option>
                            <option> 3 </option>
                            <option> 4 </option>
                            <option> 5 </option>
                            <option> 6 </option>
                            <option> 7 </option>
                            <option> 8 </option>
                            <option> 9 </option>
                            <option> 10 </option>
                            <option> 11 </option>
                            <option> 12 </option>
                            <option> 13 </option>
                            <option> 14 </option>
                            <option> 15 </option>
                            <option> 16 </option>
                            <option> 17 </option>
                            <option> 18 </option>
                            <option> 19 </option>
                            <option> 20 </option>
                            <option> 21 </option>
                            <option> 22 </option>
                            <option> 23 </option>
                            <option> 24 </option>
                            <option> 25 </option>
                            <option> 26 </option>
                            <option> 27 </option>
                            <option> 28 </option>
                            <option> 29 </option>
                            <option> 30 </option>
                            <option> 31 </option>
                        </select>    
                    
                        <select class="Select" name="mes" id="Fecha" required>
                            <option> Ene </option>
                            <option> Feb </option>
                            <option> Mar </option>
                            <option> Abr </option>
                            <option> May </option>
                            <option> Jun </option>
                            <option> Jul </option>
                            <option> Ago </option>
                            <option> Sep </option>
                            <option> Oct </option>
                            <option> Nov </option>
                            <option> Dic </option>
                    </select>
                    <select class="Select" name="Año" id="Fecha" required>
                            <option> Año </option> <
                            <option> 2016 </option>
                            <option> 2015 </option>
                            <option> 2014 </option>
                            <option> 2013 </option>
                            <option> 2012 </option>
                            <option> 2011 </option>
                            <option> 2010 </option>
                            <option> 2009 </option>
                            <option> 2008 </option>
                            <option> 2007 </option>
                            <option> 2006 </option>
                            <option> 2005 </option>
                            <option> 2004 </option>
                            <option> 2003 </option>
                            <option> 2002 </option>
                            <option> 2001 </option> 
                            <option> 1999 </option>
                            <option> 1998 </option>
                            <option> 1997 </option>
                            <option> 1996 </option>
                            <option> 1995 </option>
                            <option> 1994 </option>
                            <option> 1993 </option>
                            <option> 1992 </option>
                            <option> 1991 </option>
                            <option> 1990 </option>
                            <option> 1989 </option>
                            <option> 1988 </option>
                            <option> 1987 </option>
                            <option> 1986 </option>
                            <option> 1985 </option>
                            <option> 1984 </option>
                    </select>
                    <br />
                    <br />
                    <label class="f"> Celular* </label>
                    <input type="text" name="Celular" id="Celular" required/>

          


             </form
            
                </body>