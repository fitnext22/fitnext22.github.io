<?php
  session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	<title>PERFIL USUARIO</title>
	<link rel="icon" type="image/jpg" href="assets/images/logofinal.png"/>
	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	<style>
		p {
			font-family: "Sofia", sans-serif;
		font-size: 20px;
		text-shadow: 1px 1px 1px #ababab;
				}
				
		hr {
			color:green;
			size: 5px;
		}

	</style>
</head>
<body>
	
</body>
</html>
<body>
	<!-- HEADER -->
	<?php
	include "header.php";
	?>
	<!-- FIN HEADER -->

	<!-- container -->
	<div class="container" style="margin-top:5%;">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class=""><a title="<?php
                                $hora_actual = strtotime(date('d-m-Y h:i'));
                                // diferencia en segundos / 60  minutos. 
                                $minutos = ($hora_actual - strtotime($_SESSION['fechayhora'])) / 60;
                                echo $_SESSION['usuario'] . '(' . $minutos . ' minutos logueado)'; ?>">
                                <?php  echo $_SESSION['usuario'] ?>
                </a></li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
				<img src="assets/images/blanco.png" style="width: 150px; background-color: rgb(207, 240, 140); border-radius: 100%;">

				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							
							<hr>
							
	<!--<form action="signin.php" method="POST">-->
	<?php
$servername="localhost";
    $database="fitnext";
    $username="root";
    $password="";

    $conexion=new mysqli($servername, $username, $password, $database);
$buscar=mysqli_query($conexion,"SELECT * FROM usuarios WHERE NOMBRE='".$_SESSION['usuario']."'");
$fila=mysqli_fetch_array($buscar);
$NOMBRE=$fila['NOMBRE'];

?>
<h1>Editar usuario</h1>
<form action="modificar.php" method="post">
	<label>Nombre de la NOMBRE: </label>
	<input type="hidden" name="ID_USUARIO" value="<?php echo $_SESSION['usuario'];?>">
	<input type="text" name="APELLIDOS" value="<?php echo $NOMBRE;?>"><br>
	
	<br>
	<input type="submit" value="Guardar">
<?php
	$id_categoria=$_POST['ID_USUARIO'];
$categoria=$_POST['APELLIDOS'];


?>
</form>
    <hr>

								
	<!--</form>-->
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

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
</html>
</php>