<link rel="icon" type="image/jpg" href="assets/images/logofinal.png"/><!DOCTYPE php>

<!DOCTYPE php>
<php lang="en">
<head>
<style>
		form {
			font-family: "Sofia", sans-serif;
  font-size: 20px;
  text-shadow: 1px 1px 1px #ababab;
		}
		
		</style>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Crear cuenta</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- php5 shim and Respond.js IE8 support of php5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/php5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- HEADER -->
	
	<!-- FIN HEADER -->
	<!-- container -->
	<div class="container">

		

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Registrarse</h1>
				</header>
				
				<div style="text-align:center;" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 style="font-family: 'Sofia', sans-serif;
  font-size: 20px;
  text-shadow: 1px 1px 1px #ababab;" class="thin text-center">Regístrate</h3>
							<p style="font-family: 'Sofia', sans-serif;
  font-size: 20px;
  text-shadow: 1px 1px 1px #ababab;" class="text-center text-muted">Si tienes una cuenta, <a href="login.php">loguéate</a>. Si no la tienes únete a nosotros para grandes experiencias. </p>
							<hr style="color:green;size: 5px;">

							<form method="POST" action="signup.php">
							NOMBRE: <br> <input type="text" name="NOMBRE" placeholder="NOMBRE"  maxlength="20" required >
                    <br><br>
                    PASSWD: <br><input required type="password" name="PASSWD" placeholder=" PASSWD"  maxlength="20">
                    <br><br>
					APELLIDOS: <br> <input required type="text" name="APELLIDOS" placeholder=" APELLIDOS"  maxlength="20">
                    <br><br>
					EDAD: <br> <input required type="text" name="EDAD" placeholder=" EDAD"  maxlength="20">
                    <br><br>
					PROVINCIA: <br> <input required type="text" name="PROVINCIA" placeholder=" PROVINCIA"  maxlength="20">
                    <br><br>
					CIUDAD: <br> <input required type="text" name="CIUDAD" placeholder=" CIUDAD"  maxlength="20">
                    <br><br>
					EMAIL: <br> <input required type="text" name="EMAIL" placeholder=" EMAIL"  maxlength="20">
                    <br><br>
					MOVIL: <br> <input type="text" name="MOVIL" placeholder=" MOVIL"  maxlength="20">
                    <br><br>
					DEPORTE: <br><select name="DEPORTE" Title="En caso de ser otro deporte mencionalo en la descripción ;)" placeholder="Deporte principal.." required >
                     <option value="FUTBOL">FUTBOL</option>
                     <option value="BALONCESTO">BALONCESTO</option>
                     <option value="PADEL">PADEL</option>
					 <option value="OTROS">OTROS</option>
                    </select>
					
                    <br><br>
					DESCRIPCION: <br> <textarea type="text" name="Descripción..." placeholder=" DESCRIPCION" style="width:100%;" maxlength="20"></textarea>
                    <br><br>
						</div>
					</div>
					<div class="">
					<button style="text-align:center;
    padding: 1rem;
    text-transform: uppercase;
    color: #35B729;
	color:white;
    background-color: green;
    border: none;
    border-radius: 3px;
    box-shadow: 1px 1px 10px rgba(50,50,50,.4);
    transition: .3s all ease;
    letter-spacing: .1rem;
    font-size: .85rem;
    width: 200px;
	height: 37px;
   box-shadow: posy;" class="but" type="submit" name="InsertarUsuario" value="InsertarUsuario">Crear</button>
					</div>
				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
<?php
function getConexion() {
    $servername="localhost";
    $database="fitnext";
    $username="root";
    $password="";

    $conexion=new mysqli($servername, $username, $password, $database);
    if ($conexion->connect_error){
         echo "Fallo al conectar con la BD";
         return null;
    } else
         return $conexion;
  }

function insertUsuario($NOMBRE, $PASSWD, $APELLIDOS,$EDAD,$PROVINCIA, $CIUDAD, $EMAIL, $MOVIL, $DEPORTE, $DESCRIPCION){
    $con = getConexion();
    if (!$con) 
        return null;
    else {
        $sql = "INSERT INTO usuarios(NOMBRE,PASSWD,APELLIDOS,EDAD,PROVINCIA,CIUDAD,EMAIL,MOVIL,DEPORTE,DESCRIPCION) 
                VALUES ('{$NOMBRE}','{$PASSWD}','{$APELLIDOS}','{$EDAD}','{$PROVINCIA}','{$CIUDAD}','{$EMAIL}','{$MOVIL}','{$DEPORTE}','{$DESCRIPCION}')";
                
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
        mysqli_close($con);
    }
  }

  if (isset($_POST['InsertarUsuario'])){
	$res=insertUsuario(
					$_POST['NOMBRE'], 
					$_POST['PASSWD'],
					$_POST['APELLIDOS'],
					$_POST['EDAD'],
					$_POST['PROVINCIA'],
					$_POST['CIUDAD'],
					$_POST['EMAIL'],
					$_POST['MOVIL'],
					$_POST['DEPORTE'],
					$_POST['DESCRIPCION']);
					
	if ($res==true)
	   echo "<script> alert('Se ha creado correctamente');window.location= 'login.php' </script>";
	elseif ($res==false)
		echo "Error al insertar usuario";
	else echo "Error al conectar a la base de datos";
  }

?>	

<!--FOOTER -->
<?php
include "footer.php";
?>
<!--FIN FOOTER -->




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</php>