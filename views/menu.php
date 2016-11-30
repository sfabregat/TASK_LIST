<?php
  	include("header.php"); 

	if(isset($_SESSION['id']))
	{
		echo '
		<div class="jumbotron">
		<div class="container text-center">
		    <h1>Bienvenido</h1>
		    <p>Haz click en este boton para ver tus tareas.</p>
		    <a href="user.php"><button type="button" class="btn btn-success">TAREAS</button></a>
		  </div>
		</div>';
	}else{
		echo '
		<div class="jumbotron">
		<div class="container text-center">
		    <h1>LISTA DE TAREAS</h1>
		    <p>Logueate para ver tus tareas</p>
		    <a href="user.php"><button type="button" class="btn btn-success">Login</button></a>
		  </div>
		</div>';
	}

  include("footer.php");
  ?>