<?php
 /**
  *
  */
 class Coche
 {

   var $ruedas;
   var $motor;
   var $color;
   //metodo constructor
   function Coche()
   {
     $this->ruedas=4;
     $this->motor=1600;
     $this->color="";
   }
   function arrancar(){
     echo "Arrancando<br>";
   }
   function frenar(){
     echo "frenando<br>";
   }
   function girar(){
     echo "girando<br>";
   }
 }
//----------------------------------------------------------------------------
class Camion
{

  var $ruedas;
  var $motor;
  var $color;
  //metodo constructor
  function Camion()
  {
    $this->ruedas=8;
    $this->motor=2600;
    $this->color="";
  }
  function arrancar(){
    echo "Arrancando<br>";
  }
  function frenar(){
    echo "frenando<br>";
  }
  function girar(){
    echo "girando<br>";
  }
}




 ?>
