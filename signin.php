<?php
  session_start()
?>
<link rel="icon" type="image/jpg" href="assets/images/logofinal.png"/>
<!DOCTYPE php>
<php lang="en">
<head>
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
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>PERFIL USUARIO</title>

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
				&nbsp;&nbsp;&nbsp;
				<!--<a href="modificar.php"><button type="submit" name="modificar" value="MODIFICAR" style="text-align:center;
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
   box-shadow: posy;">Modificar</button></a>-->
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							
							<hr>
							
	<!--<form action="signin.php" method="POST">-->
	<form action="signin.php" method="POST">
	<a name="sesion"  style="color:green;"><p>User: <?php  echo $_SESSION['usuario'] ?></p></a>
	</form>
	<?php
	$usuario = $_SESSION['usuario'];
//print_r($_SESSION);
$conexion=mysqli_connect("localhost","root","","fitnext");
if (mysqli_connect_errno()){
  echo "<br/>ERROR DE CONEXIÓN A LA BASE DE DATOS.".mysqli_error($conexion)."<br/>";
}else{
	echo "<form name='formulario' action='signin.php' method='POST'>";
	mysqli_query($conexion,"SET NAMES 'utf8'");
	$resultado=mysqli_query($conexion,"SELECT * FROM usuarios WHERE NOMBRE='".$usuario."'");

	while($reg=mysqli_fetch_array($resultado)){
		echo "<p>ID_Usuario: #<td>$reg[ID_USUARIO]</td></p><br><hr>";
		echo "<p>NOMBRE: <td>$reg[NOMBRE]</td></p><br>";
		echo "<p>APELLIDOS: <td>$reg[APELLIDOS]</td></p><br>";
		echo "<p>EDAD: <td>$reg[EDAD]</td></p><br>";
		echo "<p>EMAIL: <td>$reg[EMAIL]</td></p><br>";
		echo "<p>PROVINCIA: <td>$reg[PROVINCIA]</td></p><br>";
		echo "<p>CIUDAD: <td>$reg[CIUDAD]</td></p><br>";
		echo "<p>MOVIL: <td>$reg[MOVIL]</td></p><br>";
		echo "<p>DEPORTE: <td>$reg[DEPORTE]</td></p><br>";

		echo "<div '><p>DESCRIPCION: <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>$reg[DESCRIPCION]</td></p><br>";

}


}

?>

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
</php>