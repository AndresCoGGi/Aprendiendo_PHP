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
        echo "<form action='Actualizar.php' method='get'>";
        echo "<input type='text' name='c_art' value='".$fila['CODART']."'><br>";
        echo "<input type='text' name='n_art' value='".$fila["NOMBREARTICULO"]."'><br>";
        echo "<input type='text' name='seccion' value='".$fila["SECCION"]."'><br>";
        echo "<input type='text' name='importado' value='".$fila["IMPORTADO"]."'><br>";
        echo "<input type='text' name='precio' value='".$fila["PRECIO"]."'><br>";
        echo "<input type='text' name='fecha' value='".$fila['FECHA']."'><br>";
        echo "<input type='text' name='p_orig' value='".$fila["PAISDEORIGEN"]."'><br>";
        echo "<input type='submit' name='enviando' value='Actualizar'>";
        echo "</form>";
        echo "<br>";
        echo "<br>";
      }


      //cierre de Conexion
      mysqli_close($Conexion);


     ?>
  </body>
</html>
