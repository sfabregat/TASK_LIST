<?php
session_start(); 
        if(!isset($_SESSION['id']))
        {
          echo header('Location: views/inicio.php');
        }
        else
        {
            echo header('Location: views/menu.php');; 
        }


?>