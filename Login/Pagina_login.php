<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      require("datos_conexion.php");
      //$Conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_NombreBD);
      $Conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

      //la funcion mysqli_real.... sirve para evitar inyecciones con caracteres extraños como '',$%...
      $usuario=mysqli_real_escape_string($Conexion,$_GET["usuario"]);
      $contraseña=mysqli_real_escape_string($Conexion,$_GET["contra"]);

      //condicional que pregunta si no conecto a la BD
      if(mysqli_connect_errno()){
        echo "Fallo al conectar a la BBDD";
        exit();
      }

      //seleccionar BBDD
      mysqli_select_db($Conexion,$db_NombreBD) or die ("No se encontro la BD");
      //incluir caracteres latinos
      mysqli_set_charset($Conexion,"utf8");

      $query="SELECT * FROM USUARIOS WHERE USUARIO='$usuario' AND CLAVE='$contraseña'";

      $resultado=mysqli_query($Conexion,$query);

      if(mysqli_affected_rows($Conexion)>0){
        while ($fila=mysqli_fetch_array($resultado,MYSQL_ASSOC)) {

            echo "Bienvenido $usuario estos son tus datos : <br>";
            echo "<table><tr><td>";
             echo $fila["usuario"]."</td><td>";
             echo $fila["clave"]."</td><td>";
             echo $fila["tlfn"]."</td><td>";
             echo $fila["ddireccion"]."</td><td>";
             echo "<br>";



       }
     }else {
       echo "Usuario no encontado";
     }
      //mostrar info con array asociativo




      //cierre de Conexion
      mysqli_close($Conexion);


     ?>
  </body>
</html>
