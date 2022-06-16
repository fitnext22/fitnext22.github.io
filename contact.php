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
	
	<title>Contact us - Progressus Bootstrap template</title>

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
	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Contáctanos</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contáctanos</h1>
				</header>
				
				<p>
					¿Tienes algún problema o alguna duda? Contáctanos y te responderemos enseguida ;) .
				</p>
				<br>
				<form method="POST" action="contact.php" >
						<div style="margin-left:17%;" >	EMAIL: <input required type="text" name="EMAIL" placeholder="EMAIL"  maxlength="20">&nbsp;&nbsp;&nbsp; <!--DA ESPACIO--> ASUNTO:<input required type="text" name="ASUNTO" placeholder=" ASUNTO"  maxlength="20"></div>
                    <br><br>
                    
                    
					CUERPO: <br> <textarea required type="text" name="CUERPO"  placeholder=" CUERPO" style="min-width: 100%" rows="9"></textarea>
                    <br><br>
						
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
	margin-left:37%;
   box-shadow: posy;" class="but" type="submit" name="enviar" value="enviar">Crear</button>
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

function insertUsuario($EMAIL, $ASUNTO, $CUERPO){
    $con = getConexion();
    if (!$con) 
        return null;
    else {
        $sql = "INSERT INTO contact(EMAIL,ASUNTO,CUERPO) 
                VALUES ('{$EMAIL}','{$ASUNTO}','{$CUERPO}')";
                
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
        mysqli_close($con);
    }
  }

  if (isset($_POST['enviar'])){
	$res=insertUsuario(
					$_POST['EMAIL'], 
					$_POST['ASUNTO'],
					$_POST['CUERPO']);
					
	if ($res==true)
	   echo "<script> alert('Se ha creado correctamente');window.location= 'contact.php' </script>";
	elseif ($res==false)
		echo "Error al insertar usuario";
	else echo "Error al conectar a la base de datos";
  }

?>
					</form>

			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<!--<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Ubicación</h4>
					<address>
						Talavera de la Reina, Toledo
					</address>
					<h4>Phone:</h4>
					<address>
						+34 925232323
					</address>
				</div>

			</aside>-->
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	
	 
           
             <!--MAPA-->
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3058.1593041580913!2d-4.827918684756995!3d39.96019087942069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd401c097bcad393%3A0x32ad7d82ff66d92b!2sC.%20Cristo%20de%20la%20Gu%C3%ADa%2C%2016%2C%2045600%20Talavera%20de%20la%20Reina%2C%20Toledo!5e0!3m2!1ses!2ses!4v1654536035772!5m2!1ses!2ses" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!--FIN MAPA-->

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
	
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="assets/js/google-map.js"></script>
	

</body>
</php>