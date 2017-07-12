<?php
	//Operateur de comparaison
  // <=> return -1, 0 , 1
  // tri dans un tableau croissant et decroissant
  $entries = [
    ['name'=> 'titi', 'price'=>10],
    ['name'=> 'toto', 'price'=>100],
    ['name'=> 'tata', 'price'=>50]
  ];

  function sortByPrice($one, $two){
    return $one['price'] <=> $two['price'];
  }
  usort($entries, "sortByPrice");
  var_dump($entries);

?>
