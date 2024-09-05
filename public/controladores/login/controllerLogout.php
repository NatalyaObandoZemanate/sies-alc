<?php
echo "Cierre de sesión";

include '../../configuracion.php';

session_start();

if(isset($_SESSION['session_email_usuario'])){
    session_destroy();
    header('Location: '.$URL);
}