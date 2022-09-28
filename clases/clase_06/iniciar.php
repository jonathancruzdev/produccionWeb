<?php
    session_start();
    if( isset($_POST['nombre'])){
        $usuario = $_POST['nombre'];
        $_SESSION['usuario'] = $usuario;
        echo "<p> Sesión creada para $usuario </p>";
        echo '<a href="index.html">Regresar</a>';
        echo '<a href="cerrar.php">Cerrar sesión</a>';
        echo '<a href="panel.php">Página Privada</a>';


    }

?>