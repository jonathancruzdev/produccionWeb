<?php
    require_once('../class/Usuario.php');

    if( isset( $_POST['nombre'] ) && isset( $_POST['apellido'] )  && isset( $_POST['email'] ) && isset( $_POST['password'] ) ) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $usuarioRegistro = new Usuario();
        $usuarioRegistro->setNombre($nombre);
        $usuarioRegistro->setApellido($apellido);
        $usuarioRegistro->setEmail($email);
        $usuarioRegistro->setPassword($password);
        //print_r( $usuarioRegistro );

        $usuarioRegistro->crear();
        echo $usuarioRegistro->estado;
        //print_r( $usuarioRegistro );
        // Redirigir al inicio
        //header('Location:  ../index.php ');
        //Establecer el encabezado de actualización utilizando PHP.
        header("refresh:5;url=../index.php");
        echo('<p>Usuario creado. Redirigiendo en 5 seg');
    } else {
        // Redirigir al registro
    }

?>