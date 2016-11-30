<?php 
include("header.php"); 
?>
    <div id="login" class="container text-center">
    <div class="wrapper">
    <form class="form-signin" action="" method="post">       
      <h2 class="form-signin-heading">Iniciar Sesión</h2>
      <input type="text" class="form-control" name="email" placeholder="Email" required="" autofocus="" />
      <input type="password" class="form-control" name="passw" placeholder="Contraseña" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Recordar Contraseña
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="login">Entrar</button>   
    </form>
  <?php

if(!isset($_SESSION['id']))
{ 
    $sql = 'SELECT * FROM users';
    $rec = $mysqli->query($sql);
    $result = 0; 
    if(isset($_POST['login'])) 
    { 
        while($row = $rec->fetch_array()) 
        { 
            if($row['email'] == $_POST['email'] and $row['passw'] == $_POST['passw'])
            {
                $result=1;
                $id=$row['id'];
            }
        } 

        if($result == 1) 
        {
            $_SESSION['id'] = $id; 
            header("location:../index.php"); 
        } 
        else 
        { 
            echo '<div class="container text-center">Su usuario es incorrecto, intente nuevamente.</div>'; //Si la función verificar_login() no pasa, que se muestre un mensaje de error.
        } 
    } 
} 
else 
{ 
    echo 'Su usuario ingreso correctamente.'; 
    echo '<a href="logout.php">Logout</a>'; 
} 
?>
  </div>
  </div>
<?php
include("footer.php"); 
?> 
