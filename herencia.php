<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo de herencia en php</title>
</head>
<body>

<h1>Herencia en PHP</h1>
<br>

<?php
	//instanciamos un Subscriber
	$object 			= new Subscriber();
	$object->name 		= "Fred";
	$object->password 	= "pword";
	$object->email		= "Alex_91y@hotmail.com";
	$object->phone		= "012 345 6789";
	$object->display();
	
	class User
	{
		public $name, $password;

		function save_user()
		{
			echo "Save User code goes here";
		}
	}

	class Subscriber extends User
	{
		public $phone, $email;

		function display()
		{
			echo "Name : ". $this->name ."<br>";
			echo "Pass: ".$this->password."<br>";
			echo "Phone: ".$this->phone."<br>";
			echo "Email: ".$this->email."<br>";
		}
	}

?>

</body>
</html>