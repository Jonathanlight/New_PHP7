<?php
    
  //Utilisation des class anonymes en php7
  //Class anonyme parce qu'il y a pas de nom ^_^ 
  $maClass = new class(55){

    private $prop;

    public function __construct($prop){
      $this->prop = $prop;
    }

    public function print(){
      print_r($this->prop);
    }
  };
  
  echo $maClass->print();
?>
