<?php 
include('header.php');

    if(!isset($_SESSION['id']))
    { 
        ?>
        <div id="login" class="container text-center">
        <div class="wrapper">
        <form class="form-signin" action="" method="post">       
          <h2 class="form-signin-heading">Iniciar Sesión</h2>
          <input type="text" class="form-control" name="email" placeholder="Correo Electrónico" required="" autofocus="" />
          <input type="password" class="form-control" name="password" placeholder="Contraseña" required=""/>
          <input type="password" class="form-control" name="repassword" placeholder="Repetir Contraseña" required=""/>       
          <br>
          <button class="btn btn-lg btn-primary btn-block" type="submit" name="enviar" value="Registrar">Registrarse</button>   
        </form>
        <?php
        if(isset($_POST['enviar'])) 
        { 
            if($_POST['email'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '')
            { 
                echo 'Por favor llene todos los campos.'; 
            } 
            else 
            { 
                $sql = 'SELECT * FROM users'; 
                $rec = $mysqli->query($sql);
                $verificar_usuario = 0; 
          
                while($result = $rec->fetch_array()) 
                { 
                    if($result['email'] == $_POST['email']) 
                    { 
                        $verificar_usuario = 1; 
                    } 
                } 
          
                if($verificar_usuario == 0) 
                { 
                    if($_POST['password'] == $_POST['repassword']) 
                    { 
                        $password = $_POST['password']; 
                        $email = $_POST['email']; 
                        $sql = "INSERT INTO users (email,passw) VALUES ('$email','$password')";
                        $mysqli->query($sql);

                        echo 'Te has registrado correctamente.';
                    } 
                    else 
                    { 
                        echo 'Las claves no son iguales, intente nuevamente.';
                    } 
                } 
                else 
                { 
                    if($verificar_usuario == 1) 
                    {
                        echo 'Este usuario ya ha sido registrado anteriormente.';
                    }
                } 
            } 
        } 
    } else { 
        echo 'Su usuario ingreso correctamente.'; 
        echo '<a href="logout.php">Logout</a>'; 
    } 
?>
  </div>
  </div>
<?php
include('footer.php');
?>