<?php
  //les exceptions php7
  // les Error et les Exceptions en php7
  // ont ete replace avec de nouvelles classes
  function start($app){
  	return $app->run();
  }  

  try{
  	echo start(null);
  } catch (Error $e){
  	echo $e;
  }
  
  echo "GO";
  
?>
