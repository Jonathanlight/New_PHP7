<?php
	
	//declare(strict_types=1);
   // Attend un retour particuliere 
   // a l'execution d'une function
   function run(int $a, int $b) : string{
   	$result = $a + $b;
   	return $result;
   }


   echo(gettype(run(1,2))) . "\n";
    echo(gettype(run("1","2"))) . "\n";
     echo(gettype(run(1.0,2.3))) . "\n";

?>
