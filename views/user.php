<?php
	include("header.php"); 

	if(isset($_SESSION['id']))
	{
		echo '<table class="table">
    	<tr>
       		 <th>TASK</th>
       		 <th>DATA / TIME</th>
       		 <th>DELETE TASK</th>
     	</tr>';
    	$sql="SELECT * from tasks";

		//mostrar llistat
		$result=$mysqli->query($sql);
		while($rows=$result->fetch_array()){
			if($_SESSION['id']==$rows['user'] AND $rows['completed']==0)
			echo '<tr><td>'.$rows['desc'].'</td><td>'.$rows['data'].'</td><td><a href="delete.php?delete='.$rows['id'].'"><button type="button" class="btn btn-danger">Borrar</button></a></td></tr>';

		}

		echo '</table>';

	}else{
		echo '
		<div class="jumbotron">
		<div class="container text-center">
		    <h1>LISTA DE TAREAS</h1>
		    <p>Logueate para ver tus tareas</p>
		    <a href="login.php"><button type="button" class="btn btn-success">Login</button></a>
		  </div>
		</div>';
	}
	include("footer.php");
  ?>