<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <?php

     //include("vehiculo.php");
     //include("herencia.php");
     include("encap.php");

     $pegaso=new Camion();
     $mazda=new Coche();

     //$mazda->girar();

     //si las variables de las clases son private se accede mediante metodos getter y setter
     echo $mazda->get_ruedas()."<br>";
     echo $pegaso->get_ruedas()."<br>";

     //si las variables son publicas se puede acceder asi
     //echo $pegaso->ruedas."<br>";

     /*$pegaso->frenar();
     $pegaso->arrancar();
     $mazda->establece_color("azul");
     $pegaso->establece_color("verde");
      */



      ?>
  </body>
</html>
