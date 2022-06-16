
<header style="font-size: 1.4em;">
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"> <a style="color: white; font-size:30px;">Fit</a><a style="color: green; font-size:30px;">Next</a></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="index.php">Casa</a></li>
					<li class="active"><a href="signin.php">Perfíl</a></li>
					<li class="active"><a href="chat.php">Chat</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Torneos <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left.php">Fútbol</a></li>
							<li class="active"><a href="sidebar-right.php">Lista jugadores</a></li>
						</ul>
					</li>

					<li><a href="buscar.php">Conocer gente</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li ><a title="<?php
                                $hora_actual = strtotime(date('d-m-Y h:i'));
                                // diferencia en segundos / 60  minutos. 
                                $minutos = ($hora_actual - strtotime($_SESSION['fechayhora'])) / 60;
                                echo $_SESSION['usuario'] . '(' . $minutos . ' minutos logueado)'; ?>">
                                <?php  echo $_SESSION['usuario'] ?>
                </a></li>
				<li>
				<div class="white-button">
                <a href="cerrar_sesion.php"><img style="width: 40px;color: white;background-color: white;border-radius:100%;" title="Cerrar sesión" src="assets/images/cerrar.png"></a>
              </div>
			</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
</header>