<?php
   if( isset($_POST['titulo'])){
      $titulo = $_POST['titulo'];
   } else {
      echo '<p>Falta el campor titulo</p>';
      return;
   }

   if( isset( $_POST['id_categoria']) ){
      $id_categoria = $_POST['id_categoria'];
   }  else {
      echo '<p>Falta el campor id_categoria</p>';
      return;
   }

   if( isset( $_POST['detalle']) ){
      $detalle = $_POST['detalle'];
   }  else {
      echo '<p>Falta el campor detalle</p>';
      return;
   }



   require_once('class/Post.php');

   $publicacion = new Posteo();

   $publicacion->titulo = $titulo;
   $publicacion->categoria = $categoria;
   $publicacion->detalle = $detalle;

   $publicacion->crear();

   echo "$titulo - $id_categoria - $detalle";
?>