<?php
session_start();

$email_session = $_POST['email'];
$password_session = $_POST['password'];

if ($email_session == 'cliente@gmail.com' && $password_session == 'phpintermedio') {
    $_SESSION['clientes'] = $email_session;
    
    header("Location: clientes.php#contenido4");
} else {
    $_SESSION['clientes'] = header("Location: clientes.php?error_s#contenido4");
}

//header("Location: clientes.php#contenido4");


?>