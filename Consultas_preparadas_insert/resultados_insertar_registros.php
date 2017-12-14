<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
       $codigo=$_GET["c_art"];
       $seccion=$_GET["secc"];
       $nombre=$_GET["n_art"];
       $precio=$_GET["pre"];
       $fecha=$_GET["fec"];
       $importado=$_GET["imp"];
       $pais=$_GET["p_ori"];

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
       $sql = "INSERT INTO PRODUCTOS(CODART,SECCION,NOMBREARTICULO,PRECIO,FECHA,
                                IMPORTADO,PAISDEORIGEN) VALUES (?,?,?,?,?,?,?)";
       //2.preparar
       $resultado=mysqli_prepare($Conexion,$sql);
       //3.unir parametros -----  (resultado,tipo de dato s-string, i-int,la busquedad)
       $ok=mysqli_stmt_bind_param($resultado,"sssssss",$codigo,$seccion,$nombre,$precio,$fecha,$importado,$pais);
       //4.ejejcutar SQL
       $ok=mysqli_stmt_execute($resultado);
       if($ok==false){
            echo "error al realizar la consulta";
       }else {
            echo "Articulos registrados <br><br>";
            mysqli_stmt_close($resultado);
       }
       mysqli_close($Conexion);
    ?>
  </body>
</html>
