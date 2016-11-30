<?php
session_start(); //session_start() crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie 
include_once "conexion.php"; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>TODO LIST</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="../lib/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../lib/css/TODO.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php">TODO LIST</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../index.php"><span class="glyphicon glyphicon-home"> Inicio</a></li>
        <li><a href="user.php"><span class="glyphicon glyphicon-th-list"></span> TAREAS</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if(!isset($_SESSION['id']))
        {
          echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
          echo '<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Registro</a></li>';
        }
        else
        {
            echo '<li><a href="logout.php">Logout</a></li>'; 
        }
        ?>
      </ul>
    </div>
  </div>
</nav>