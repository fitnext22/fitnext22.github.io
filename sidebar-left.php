<?php
  session_start()
?>
<link rel="icon" type="image/jpg" href="assets/images/logofinal.png"/>
<!DOCTYPE php>
<php lang="en">
<head>
<style>
tr {
	border-color: #9B9F9A;
	border: 2px;
	font-family: serif;
	
	
}
table tr:nth-child(even) {
    background-color: #66B43D;
	text-align: center;
	margin-left:25%;
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
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Jugadores que juegan Fútbol</title>

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
			<li class="active">Fútbol</li>
		</ol>
	<div>
	<!--ASIGNAR TICKET  A UN USUARIO-->	
	<form action='sidebar-left.php' method='POST'>
	<input type="submit" name="cargar" id="Cargar" value="Cargar tickets">
	<?php
 if (isset($_POST['cargar'])) {
	// conexión a la bd   
  $servername="localhost";
  $database="fitnext";
  $username="root";
  $password="";
  $conexion=new mysqli($servername, $username, $password, $database);
if ($conexion->connect_error)
  echo "Fallo al conectar con la BD";
   $lineas = file("tickets.csv");
   $i=0;
   foreach ($lineas as $linea_num => $linea)
   { 
	  if($i != 0) 
	   { 
		   $datos = explode(";",$linea);
		   $NOMBRE_TORNEO = utf8_encode($datos[0]);
		   $DEPORTE = utf8_encode($datos[1]);
		   mysqli_query($conexion,"INSERT INTO plazas(NOMBRE_TORNEO, DEPORTE) 
								   VALUES('TORNEO FutSala Ribera','$DEPORTE')");
	   }
	   $i++;
   }
   $conexion->close();
   }
?>
	</form>
<!--FIN CARGAR TICKETS-->
	<div style="">
<!---------------------------------------------------------------------------------------------------------->

<?php

$conexion=mysqli_connect("localhost","root","","fitnext");
if (mysqli_connect_errno()){
  echo "<br/>ERROR DE CONEXIÓN A LA BASE DE DATOS.".mysqli_error($conexion)."<br/>";
}else{
        echo "<form name='formulario'style='' action='sidebar-left.php' method='POST' '>"; /*Sleccionamos el fichero donde trabajará */
    echo "<table><tr>";
    echo "<tr><h1 style='font-family:American Typewriter;'>USUARIOS</h1></tr>"; 
     echo "<tr><th>ID_USUARIO</th><th>NOMBRE</th><th>APELLIDOS</th><th>EDAD</th><th>EMAIL</th><th>PROVINCIA</th><th>CIUDAD</th><th>MOVIL</th></tr>";
    // Mostrar USUARIOS
//

    $resultado=mysqli_query($conexion,"SELECT * FROM usuarios WHERE ID_USUARIO NOT IN (SELECT ID_USUARIO FROM torneos)"); /*Realizamos lla conexion y la consulta*/
    
	while($reg=mysqli_fetch_array($resultado)){
       echo "<tr><td> $reg[ID_USUARIO]</td><td>$reg[NOMBRE]</td><td>$reg[APELLIDOS]</td><td>$reg[EDAD]</td>
        <td>$reg[EMAIL]</td><td>$reg[PROVINCIA]</td><td>$reg[CIUDAD]</td><td>$reg[MOVIL]</td>
        <td><input type='radio'  name='ID_USUARIO' value=$reg[ID_USUARIO]></td>";
        echo "</tr>";

     /*Recogemos los datos*/
     echo "<table ><tr >";
     echo "<br><br><h1 style='font-family:American Typewriter;'>TICKETS<h1></tr>"; 
     echo "<tr></tr>";
     echo "<tr><th>COD_PLAZA</th><th>NOMBRE_TORNEO</th><th>DEPORTE</th></tr>";
    
 // Mostrar Tickets
 $resultado=mysqli_query($conexion,"SELECT * FROM plazas WHERE COD_PLAZA NOT IN (SELECT COD_PLAZA FROM torneos)");
 while($reg=mysqli_fetch_array($resultado)){
 echo "<tr><td> $reg[COD_PLAZA]</td><td>TORNEO FutSala Ribera</td><td>$reg[DEPORTE]</td>
     <td><input type='radio'  name='COD_PLAZA' value=$reg[COD_PLAZA]></td>";
     echo "</tr>";
 }
 echo "</table><br><br>";
 echo '<button style="text-align:center;
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
   box-shadow: posy;" class="but" type="submit" name="asignar" value="asignar">Asignar</button>';
  /*Boton para poder iniciar la consulta sql y php */
    


 mysqli_close($conexion);

    }
    echo "</table>";
        //HACEMOS LO  MISMO EN TICKETS()plazas
        

        
       



}
#TENEMOS EL CÓDIGO QUE NOS REALIZA LA ASIGNACIÓN DE LOS TICKETS SI NO ESTAN ASIGNADOS. ESTOS SE MUESTRAN EN LA BASE DE DATOS 
#
//FUNCION ASIGNAR
	//CONEXION
  $fechaActual = date ( 'd-m-Y' );

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
	  //FIN FUNCION CONEXION
function insertAsignacion($id_usuario, $n_ticket, $fechaActual/*, $f_asignacion*/)
    {
        $con = getConexion();
        if (!$con) 
            return null;
        else 
        {
			
            $sql = "INSERT INTO torneos(ID_USUARIO, COD_PLAZA, FECHA) 
                    VALUES ('{$id_usuario}','{$n_ticket}','{$fechaActual}')";
            
            if (mysqli_query($con, $sql)) 
            {
                mysqli_close($con);
                return true;
            } else 
            {
                mysqli_close($con);
                return false;
            }
            mysqli_close($con);
        }
    }
//COMPROBAR BOTON ASIGNAR
if (isset($_POST["asignar"])){ /*Comprobamos que se haya pulsado el boton de asignar y los radios de selecciones*/
  if (isset ($_POST['ID_USUARIO']) && isset($_POST['COD_PLAZA'])){
	  $user=$_POST['ID_USUARIO'];// comprobar si lo recoge
//	echo "<script> alert('".$user."');window.location= 'sidebar-left.php' </script>";//comprobar si lo recoge
  // $f_asignacion=$_POST['NOMBRE_TORNEO'];//nombre torneo
   $id_usuario=$_POST['ID_USUARIO'];//nº plaza
   $n_ticket=$_POST['COD_PLAZA'];//id usuario
   //echo "<script> alert('".$n_ticket."');'";
   if (!(insertAsignacion($id_usuario, $n_ticket, $fechaActual/*, $f_asignacion*/))){

  echo "error de inserción";

   }else{
     echo "insertado correctamente";
   }
}
   

}


?>
</form>
</div>

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