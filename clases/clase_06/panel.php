<?php
    session_start();

    if( isset( $_SESSION['usuario'] )){
        $usuario = $_SESSION['usuario'];
        echo "Sesión iniciada para $usuario ";
    } else {
        echo "No existes una sesión activa";
    }

?>