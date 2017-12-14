<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $busquedad=$_GET["buscar"];
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

      $query="SELECT * FROM PRODUCTOS WHERE NOMBREARTICULO LIKE '%$busquedad%'";

      $resultado=mysqli_query($Conexion,$query);

      //mostrar info con array asociativo
      while ($fila=mysqli_fetch_array($resultado,MYSQL_ASSOC)) {
        echo "<table><tr><td>";
         echo $fila["CODART"]."</td><td>";
         echo $fila["NOMBREARTICULO"]."</td><td>";
         echo $fila["SECCION"]."</td><td>";
         echo $fila["IMPORTADO"]."</td><td>";
         echo $fila["PRECIO"]."</td><td>";
         echo $fila["PAISDEORIGEN"]."</td><td></tr></table>";
         echo "<br>";

      }


      //cierre de Conexion
      mysqli_close($Conexion);


     ?>
  </body>
</html>
