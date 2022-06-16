<?php
  session_start()
?>
<link rel="icon" type="image/jpg" href="assets/images/logofinal.png"/>
<!DOCTYPE php>
<php lang="en">
<head>
	<style>
		tr, table{
			margin-left:10px;
			border-spacing:10px;
			
		}
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
	
	<title>BUSCAR USUARIO</title>
	<style>
tr {
	border-color: #9B9F9A;
	border: 2px;
	font-family: serif;
	
	
}
table tr:nth-child(even) {
    background-color: #66B43D;
	text-align: center;
	margin-left:20%;
	color: white;
	
}

table tr:nth-child(odd) {
    background-color: #fff;
	text-align: center;
	padding-left: 3px;
}

h1{
  font-family: Helvetica;
}
</style>
	<style>
tr, td, table {
	text-align:center;
}

	</style>
	
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

<body style="text-align:center;">
	<!-- HEADER -->
	<?php
	include "header.php";
	?>
	<!-- FIN HEADER -->

	<!-- container -->
	<div class="container" style="margin-top:5%;">

		<ol class="breadcrumb" style="margin-left: -90%;">
			<li><a href="index.php">Home</a></li>
			<li class=""><a title="">Buscar
                </a></li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<h1 style="font-family: American Typewriter;text-align: center; color: green;">Conoce nuevos deportistas</h1>
						<div class="panel-body">
							
							<hr>
							
	<!--<form action="buscar.php" method="POST">-->
	<form action="buscar.php" method="POST" style="text-align:center;">
	
   <!--USUARIO-->
	<input type="text" name="numero" placeholder="ID_USUARIO">
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
    
   box-shadow: posy;" class="but" type="submit" name="buscar" value="Buscar">Buscar</button>
					</div>
	
    <?php
	function getconexion() {
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


   
   function BuscarUsuario($numero){
    // Almacenamos la consulta a ejecutar en una variable de tipo cadena.
   $sql="SELECT *  from usuarios where ID_USUARIO=$numero";
   $con=getconexion(); //abrimos la conexión
   if ($con==null){
       return null;
   }
   else{
           $con->set_charset("utf8");
           $resultado=$con->query($sql);

           if ($resultado!=null){

               $con->close();
               return $resultado;
           }
           else{
               echo "No se ha ejecutado la consulta";
               $con->close();
           }
   }

   }

   if (isset($_POST['buscar'])){
	$res=BuscarUsuario($_POST['numero']);

		if ($res==true){
			echo "<table><tr><tr  style='padding: 15px;'><td  style='padding: 15px;'>ID_USUARIO</td><td>NOMBRE </td>
						  <td>APELLIDOS </td><td>EDAD </td><td>EMAIL </td><td>CIUDAD</td></tr>";
			$fila=$res->fetch_assoc();
			while ($fila){
				echo "&nbsp;&nbsp;<tr style='text-align:center;'><td>{$fila["ID_USUARIO"]}</td>";
				echo "<td>{$fila["NOMBRE"]}</td>";
				echo "<td>{$fila["APELLIDOS"]}</td>";
				echo "<td>{$fila["EDAD"]}</td>";
				echo "<td>{$fila["EMAIL"]}</td>";
				echo "<td>{$fila["CIUDAD"]}</td></tr>";
				
				echo "</table><br>";
				echo "<h3 style='font-family: American Typewriter;'>DESCRIPCION</h3><br>";
			echo "<td style='font-family: American Typewriter;'>{$fila["DESCRIPCION"]}</td><br>";
			$fila=$res->fetch_assoc();
			}
			
			echo "<br>";
		}
	} 


   
?> 	</form>
	<?php
	
//print_r($_SESSION);
$conexion=mysqli_connect("localhost","root","","fitnext");
if (mysqli_connect_errno()){
  echo "<br/>ERROR DE CONEXIÓN A LA BASE DE DATOS.".mysqli_error($conexion)."<br/>";
}else{
	echo "<form name='formulario' action='buscar.php' method='POST'>";
	mysqli_query($conexion,"SET NAMES 'utf8'");
	$resultado=mysqli_query($conexion,"SELECT * FROM usuarios   ORDER BY RAND() DESC LIMIT 0,10");
	//function SESION($sesion){
	//	$resultado2="SELECT * FROM usuarios WHERE NOMBRE='Raul'";
	//}
	//$resultado=mysqli_query($conexion,$SESION);
	while($reg=mysqli_fetch_array($resultado)){
        echo "<div style='border-color: green;border-size:1.2em;border-style: dotted;'>";
		echo "<p>ID_Usuario: #<td>$reg[ID_USUARIO]</td></p>";
		echo "<p>NOMBRE: <td>$reg[NOMBRE]</td></p><br>";
		echo "<p>APELLIDOS: <td>$reg[APELLIDOS]</td></p><br>";
		echo "<p>EMAIL: <td>$reg[EMAIL]</td></p><br>";
		echo "<p>EDAD: <td>$reg[EDAD]</td></p><br>";
		echo "<p>EMAIL: <td>$reg[EMAIL]</td></p><br>";
        echo "</div><hr>";

}


}


?>

								

								
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