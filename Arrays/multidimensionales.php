<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
     $alimnetos  = array('fruta'=>array("tropical"=>"kiwi",
                                        "citrico"=>"mandarina",
                                         "otros"=>"manzana"),
                        'leche'=>array("animal"=>"vaca",
                                        "vegetal"=>"coco"),
                        'carne'=>array("vacuno"=>"lomo",
                                        "porcino"=>"pata"));

     //echo $alimnetos["carne"]["vacuno"];
     foreach ($alimnetos as $clave_alim => $alim) {
        echo "$clave_alim:<br>";

        //desglozar array dentro del array
        while(list($clave,$valor)=each($alim)){
          echo "$clave=$valor<br>";
        }
        echo "<br>";
     }
     ?>

  </body>
</html>
