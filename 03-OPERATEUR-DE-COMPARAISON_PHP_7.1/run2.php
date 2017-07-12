<?php
	//Operateur de comparaison
  // <=> return -1, 0 , 1
  function run(int $a, int $b){
    $result = $a <=> $b;
  	switch ($result) {
      case -1:
          echo "gauche plus petit \n";
          break;
      case 0:
          echo "Identiques \n";
          break;
      case 1:
          echo "gauche plus grand\n";
          break;
    }
  }

  echo run(1, 2);
  echo run(2, 2);
  echo run(2, 1);

?>
