<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
       $pais=$_GET["buscar"];
       require("datos_conexion.php");
       $Conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
       if(mysqli_connect_errno()){
           echo "Fallo al conectar a la BBDD";
           exit();
       }
       mysqli_select_db($Conexion,$db_NombreBD) or die ("No se encontro la BD");
       mysqli_set_charset($Conexion,"utf8");
       //CONSULTAS PREPARADAS
       //1.SQL
       $sql = "SELECT CODART,SECCION,PRECIO,PAISDEORIGEN FROM PRODUCTOS WHERE PAISDEORIGEN=?";
       //2.preparar
       $resultado=mysqli_prepare($Conexion,$sql);
       //3.unir parametros -----  (resultado,tipo de dato,la busquedad)
       $ok=mysqli_stmt_bind_param($resultado,"s",$pais);
       //4.ejejcutar SQL
       $ok=mysqli_stmt_execute($resultado);
       if($ok==false){
            echo "error al realizar la consulta";
       }else {
            //5. Asociar variables
            $ok=mysqli_stmt_bind_result($resultado,$codigo,$seccion,$precio,$pais);
            echo "Articulos encontrados: <br><br>";
            //6. leer resultados
            while (mysqli_stmt_fetch($resultado)) {
                    echo $codigo." ".$seccion." ".$precio." ".$pais."<br>";
            }
            //7.cerrar el objeto
            mysqli_stmt_close($resultado);
       }
       mysqli_close($Conexion);
    ?>
  </body>
</html>
