<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      $cod = $_GET["c_art"];
      $sec = $_GET["seccion"];
      $nom = $_GET["n_art"];
      $pre = $_GET["precio"];
      $fec = $_GET["fecha"];
      $imp = $_GET["importado"];
      $pais = $_GET["p_orig"];

      require("datos_conexion.php");
      //$Conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_NombreBD);
      $Conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

      //condicional que pregunta si no conecto a la BD
      if(mysqli_connect_errno()){
        echo "Fallo al conectar a la BBDD";
        exit();
      }

      //seleccionar BBDD
      mysqli_select_db($Conexion,$db_NombreBD) or die ("No se encontro la BD");
      //incluir caracteres latinos
      mysqli_set_charset($Conexion,"utf8");

      $query="DELETE FROM PRODUCTOS WHERE CODART='$cod'";

      $resultado=mysqli_query($Conexion,$query);
      if ($resultado==false) {
        echo "Error en la eliminacion del registro";
      }else {

           if (mysqli_affected_rows($Conexion)==0) {
              echo "No hay registros que eliminar con ese codigo";
           }else {
              echo "Registro eliminado <br>";
              echo "se han eliminado ".mysqli_affected_rows($Conexion)." registros";
           }
      }

      //cierre de Conexion
      mysqli_close($Conexion);


     ?>

  </body>
</html>
