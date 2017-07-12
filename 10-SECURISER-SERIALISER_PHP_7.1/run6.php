<?php
    
	//Sécuriser et sérialiser
	class User{
		public $name = 'Julien';
	}

	class Admin extends User{
		public $power = true;
	}

	$user = new User();
	$serialiser = serialize($user);

	echo $serialiser."\n";

	//si un hacker passe au milieu de l'execution de votre code et change la classe User en Admin
	$serialiser = str_replace('4:"User"', '5:"Admin"', $serialiser);

	//si la classe n'est pas lister dans les option sa retournera __PHP_Incomplete_Class
	$option = ['allowed_classes' => ['User', 'Admin']];
	$objet = unserialize($serialiser, $option);

	echo get_class($objet);
?>
