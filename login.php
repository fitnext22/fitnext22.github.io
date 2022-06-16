<?php
	session_start()
?>
<link rel="icon" type="image/jpg" href="assets/images/logofinal.png"/>
<!DOCTYPE php>
<php lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	<link rel="stylesheet" href="assets/css/login.css">
	<title>FitNext</title>

	<!--<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">-->

	<!-- Custom styles for our template -->
	<!--<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">-->

	<!-- php5 shim and Respond.js IE8 support of php5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/php5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

  <div class="container">
    <div class="backbox">
      <div class="loginMsg">
        <div class="textcontent">
          <p class="title">¿No tienes cuenta?</p>
          <p>Únete a nosotros.</p>
          <button type="submit" name="crear" value="crear"><a href="signup.php" style="color: white;">LOG IN</a></button>
        </div>
      </div>
      <div class="signupMsg visibility">
        <div class="textcontent">
          <p class="title">¿Tienes una cuenta?</p>
          <p>Logueate e inicia sesión.</p>
          C
        </div>
      </div>
    </div>
    <!-- backbox -->

    <div class="frontbox">
      <div class="login">
        <h2>LOG IN</h2>
        <form method="POST" action="login.php">
        <div>
            <input type="text" name="usuario" placeholder="USUARIO">
            <input type="password" name="passwd" placeholder="PASSWORD">
        </div>
        <p><a style="color: green;" href="contact.php">¿Olvidó la contraseña?</a></p>
        <button type="submit" name="entrar" value="Entrar">LOG IN</button>
      </div>

      <div class="signup hide">
        <h2>SIGN UP</h2>
        <div class="inputbox">
          <input type="text" name="fullname" placeholder="  FULLNAME">
          <input type="text" name="email" placeholder="  EMAIL">
          <input type="password" name="password" placeholder="  PASSWORD">
        </div>
        
        <input >
      </div>


    </div>
    <!-- frontbox -->
  </div>
<?php
  if (isset($_POST['entrar'])){

// conectamos con la base de datos
$servername="localhost";
$database="fitnext";
$username="root";
$password="";

$conexion=new mysqli($servername, $username, $password, $database);
// llevamos a las vrbles los valores leidos del formulario
$usuario = $_POST["usuario"];
$password = $_POST["passwd"];

// Comprobamos si hay algún usuario con ese nombre
$sql="SELECT * from usuarios WHERE NOMBRE ='$usuario' and PASSWD='$password'";
$res= mysqli_query($conexion,$sql);
$nr= mysqli_num_rows($res);
//$_SESSION=['nombre']=$usuario;
if ( $nr == 1){
 $_SESSION['usuario']=$usuario;
    $_SESSION['fechayhora'] = date('d-m-Y h:i');  
        echo "<script> alert('Bienvenido a FitNext $usuario');window.location= 'index.php' </script>";
    }else{
        echo "<script> alert('Usuario o Contraseña incorrecta');window.location= 'login.php' </script>";
    }
}

// }


?>
</form>
</body>

</html>