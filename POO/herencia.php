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
   function establece_color($color_coche){
     $this->color=$color_coche;
     echo "coche es ".$this->color."<br>";
   }
 }
//----------------------------------------------------------------------------
class Camion extends Coche
{

  //metodo constructor
  function Camion()
  {
    $this->ruedas=8;
    $this->motor=2600;
    $this->color="";
  }
  function establece_color($color_camion){
    $this->color=$color_camion;
    echo "camion es ".$this->color;
  }
  function arrancar(){
    parent::arrancar();
    echo "camion arrancando<br>";
  }

}
?>
