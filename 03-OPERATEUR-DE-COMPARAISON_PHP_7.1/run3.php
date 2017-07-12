<?php
    
  //operateur qui verifie si une des valeur est null
   function run($a, $b){
   	  $value = $a ?? $b;
      if ($value == null) {
        $value = "null value";
      }
      return $value."\n";
   }

   //verifie dans le tableau si une value existe
   function runArray($a, $b){
     $array = ['keys' => 235465];
     $value = $array['key'] ?? $b ?? 'default';

     return $value."\n";
   }


   //Execution de la function de test
   echo runArray(null, 2);
   echo runArray(5, 15);
   echo runArray(null, null);

?>
