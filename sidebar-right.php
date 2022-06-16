<?php
  session_start()
?>
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

</style>
<link rel="icon" type="image/jpg" href="assets/images/logofinal.png"/><!DOCTYPE php>
<php lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Right Sidebar template - Progressus Bootstrap template</title>

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
<br>
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Right Sidebar</li>
		</ol>
<br>
<?php


$conexion=mysqli_connect("localhost","root","","fitnext");
if (mysqli_connect_errno()){
  echo "<br/>ERROR DE CONEXIÓN A LA BASE DE DATOS.".mysqli_error($conexion)."<br/>";
}else{
        echo "<form style='margin-left: 37%;' name='formulario' action='sidebar-right.php' method='POST'>"; /*Sleccionamos el fichero donde trabajará */
    echo "<table  ;><tr style=''>";
 
     echo "<div style='background-color:#3F7631'><th>ID_USUARIO</th><th>COD_PLAZA</th><th>FECHA</th></div>";
    // Mostrar USUARIOS
//

    $resultado=mysqli_query($conexion,"SELECT * FROM torneos"); /*Realizamos lla conexion y la consulta*/
    
	while($reg=mysqli_fetch_array($resultado)){
       echo "<tr><td> $reg[ID_USUARIO]</td><td>$reg[COD_PLAZA]</td><td> $reg[FECHA]</td></tr>";

     /*Recogemos los datos*/
            
    }
    echo "</table>";
		
}

echo "</form>";


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