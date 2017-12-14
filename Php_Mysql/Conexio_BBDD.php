<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <style media="screen">
      table{
        width: 50%;
        border: 1px dotted #FF0000;
        margin: auto;
      }
    </style>
  </head>
  <body>

    <?php

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

      $query="SELECT * FROM PRODUCTOS WHERE PAISDEORIGEN='ESPAÑA'";

      $resultado=mysqli_query($Conexion,$query);


      /*while ($fila=mysqli_fetch_row($resultado)) { //mira si hay regitros
        //cuando una condicion es bolleana devuelve true y da acceso
        //se pregunta si hay registros en cada linea
        echo "<table><tr><td>";
         echo $fila[0]."</td><td>";
         echo $fila[1]."</td><td>";
         echo $fila[2]."</td><td>";
         echo $fila[3]."</td><td>";
         echo $fila[4]."</td><td>";
         echo $fila[5]."</td><td>";
         echo $fila[6]."</td><td></tr></table>";
         echo "<br>";

      }*/

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
