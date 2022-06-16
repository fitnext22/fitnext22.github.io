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
	
	<title>FitNext</title>
	<link rel="shortcut icon" type="image/png" href="logofinal.png">
	<link rel="shortcut icon" type="image/png" href="assets/images/logofinal.png">
	
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

<body class="home">
	<!-- Fixed navbar -->
	<!-- HEADER -->
	<?php
	include "header.php";
	?>
	<!-- FIN HEADER -->
	<!--CARUESEL--->
	
	<!--FIN CARUESEL--->
	<!-- Intro -->
	<img src="assets/images/fondo2.jpeg" style="height:auto; width: 100%;">
	<div class="container text-center" style="margin-top:5%;">
		<br> <br>
		<h2 class="thin">La mejor forma de encontras nuevas amistades y mejorar en lo que nos gusta</h2>
		<p class="text-muted">
			Te ayudamos a encontran gente con quien poder hechar un partido o quedar para mejorar tus habilidades en el deporte, además de conocer a nuevas personas y establecer nuevas amistades. ¡Únete a nosotros! <img src="assets/images/felicidad.png" style="height:20px; width: 20px;">
		</p>
	</div>
	<!-- /Intro-->
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
  getConexion();
  ?>
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Razones para suscribirse</h3>
			
			<div class="row">
			
				<div class="col-md-3 col-sm-6 highlight">
				
					<div class="h-caption"><img src="assets/images/people.png" style="height:100px; width: 100px;"><h4>Conoce gente</h4></div>
					<div class="h-body text-center">
						<p>Conoce y haz amistad con persona de tu alrededor o de otros lugares. ¡Visita otras zonas de juego, mejora y disfruta! :)</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><img src="assets/images/torneo.png" style="height:100px; width: 100px;"><h4>Torneos</h4></div>
					<div class="h-body text-center">
						<p>Inscríbete para apuntarte a torneos de tu misma zona, conoce a sus integrantes, mejora y ¡A GANAR!. Puedes probar diferentes deportes (fútbol, baloncesto, pádel, ...)</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
				<div class="h-caption"><img src="assets/images/torneo.png" style="height:100px; width: 100px;"><h4>Gana en salud</h4></div>
					<div class="h-body text-center">
						<p>El  deporte como ya sabemos es muy recomendable para salud, puesto que nos permite mejorar, a parte de los beneficios físicos y mentales que nos da. ¿Por qué no empezar ahora?</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><img src="assets/images/perfil.png" style="height:100px; width: 100px;"><h4>Perfil Usuario</h4></div>
					<div class="h-body text-center">
						<p>Perfil propio de cada usuario, donde podrás ver que edad tienen, de donde son y podrás hacer nuevas amistades. ¡ Pon tu foto de perfil y te reconocerán mejor!</p>
					</div>
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->


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