<?php
	
	//declare(strict_types=1);

   function run(int $a, int $b){
   	$result = $a + $b;
   	echo gettype($a) . "\n";
   	echo gettype($b) . "\n";

   	echo gettype($result) . "\n";
   }


   run(1, 2);
   run('1', '2');
   run(1.0, 2.5);

?>
