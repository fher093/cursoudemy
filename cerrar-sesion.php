<?php 

session_start(); 
$_SESSION = []; //permitira cerrar la sesion 

header('Location: /bienesraices/index.php');