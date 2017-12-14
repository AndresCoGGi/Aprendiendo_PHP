<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

     //ARRAY INDEXADO
      //forma 1
      $semana[0]="lunes";
      $semana[1]="martes";
      $semana[2]="miercoles";

    

      for ($i=0; $i <count($semana) ; $i++) {
          echo $semana[$i]."<br>";
      }
      //agregar otro elemento al array INDEXADO
      $semana[]="jueves";

      //forma2
      //$semana = array("lunes","martes","miercoles");

      //ARRAY ASOCIATIVO
      $datos = array('Nombre' =>"Juan","Apellido"=>"Gomez","edad"=>21);
      //agregar elemento al array ASOCIATIVO
      $datos["Pais"]="España";

      echo $datos["Apellido"]."<br>";

      //verificar si es un array
      if(is_array($datos)){
         echo "Es array <br>";
      }

      //recorrer array ASOCIATIVO
      foreach ($datos as $key => $value) {
          echo "a $key le corresponde $value"."<br>";
      }
     ?>
    </body>
</html>
