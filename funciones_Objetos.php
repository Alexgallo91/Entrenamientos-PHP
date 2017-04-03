<!DOCTYPE html>
<html>
<head>
	<title>Funciones y objetos</title>
	<style>
		h1{
			text-align: center;
		}
	</style>
</head>
<body>

<h1>Ejemplo de objetos y funciones</h1>
<br><br>

<?php
	//incluyendo una libreria en php
	require_once "suma.php";
	require_once "multiplicacion.php";

	if(function_exists("suma") && function_exists("multiplicacion"))
		echo "Ambas funciones estan incluidas<br>";
	else
		echo "No existen ambas funciones";

	//reversear un string
	echo strrev("AMOR") . "<br>";

	//repitiendo un string
	echo str_repeat("Hola", 2) . "<br>";

	//string a mayusculas
	echo strtoupper("hurra!!!") . "<br>";

	//a minuscula
	$mensaje = strtolower("hola IIH#DI qiqwhIIY/Qsd lsdj87ASSD878d");

	echo $mensaje;

	//cada letra con mayuscula al principio
	ucfirst($mensaje);
	echo "<br>";
	echo ucfirst($mensaje);

	$mensaje2 = "HOLA SOY UN STRING SALVAJE!!!";

	$mensaje2 = ucfirst(strtolower($mensaje2)) . "<br>";
	echo "<br>" . $mensaje2;

	echo suma(2,3);

	//declarando una clase
	$object = new User;
	print_r($object);
	class User
	{
		public $name, $password;

		function save_user()
		{
			echo "Save user code goes here";
		}
	}

	$temp = new User('usuario','pass');
	print_r($temp);
	echo "<br><br>";

	$newUser = new User();
	$newUser->name = "Joe";
	$newUser->password = "1234";

	print_r($newUser);
	echo "<br>";

	// copiando un objeto
	//
	$objeto1 = new User();
	$objeto1->name = "Susan";
	echo $objeto1->name;

	$objeto2 = clone $objeto1;
	$objeto2->name = "Jessy"; 

	print_r($objeto1);echo "<br>";
	print_r($objeto2);echo "<br>";

	//constructores
	//
	class Persona
	{

		function __construct($param1, $param2)
		{
			$username = "Guest";
		}

		//destructor
		function __destruct()
		{
			//codigo del destructo aqui
			echo "Me van a destruir X_X!";
		}
	}

	//escribiendo metodos
	class User2
	{
		public $name, $password;

		function get_password()
		{
			return $this->password;
		}
	}

	$usuariNovo = new User2();
	$usuariNovo->password = "javaForEver91";

	echo $usuariNovo->get_password();

	//metodos staticos
	//
	class Ejemplo
	{
		static function mostrar_mensaje()
		{
			echo "<br>Por favor ingresa tu password";
		}
	}

	Ejemplo::mostrar_mensaje();


	//declarando constantes
	class Constante
	{
		const ENGLISH = 1;
		const SPANISH = 2;
		const GERMAN = 3;
		const FRENCH = 4;

		static function lookup()
		{
			echo self::SPANISH;
		}
	}
	echo "<br>";
	Constante::lookup();
	//echo Constante::ENGLISH;
	//
	//property and method scope
	class Example
	{
		public $age = 23;
		protected $usercount = 12;

		private function admin();
		{
			//admin code goes here
		}
	}
	

?>

</body>
</html>



