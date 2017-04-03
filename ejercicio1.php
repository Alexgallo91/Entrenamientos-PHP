<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 1</title>
</head>
<body>

<h1>Ejemplo de suma con php</h1>

<?php

	$variable = 1;
	$variable2 = 2;

	echo "<h2>La suma es: ".($variable2+$variable)."</h2>";

	echo "<h2>Otro ejemplo</h2><br>";

	$username = "Fred Smith";
	echo "$username";
	echo "<br>";
	$current_user = $username;
	echo "$current_user";

	echo "<h2>ejemplo de arrays</h2><br>";
	$miArray = array("hola","adios","hasta luego","nos vemos");

	//array multidimensional
	$segundoArray = array(array(1,2,3),
						  array(4,5,6),
						  array(7,8,9));

	//definicion de constantes
	define("PI", 3.1416);
	echo PI." es lo que vale nuestra constante";

	$b = true;

	$b ? print "true" : print "false";
	//ejemplo de funciones
	//
	$temp = "The date is ";
	echo "<br>".$temp . longdate(time());
	function longdate($timestamp)
	{
		return date("l F jS Y", $timestamp);
	}

	//creando una variable global
	global $VARIABLE_GLOBAL;

	echo "<br>";

	test();
	test();
	test();

	function test()
	{
		static $count = 0;
		echo "contador = $count<br>";
		$count++;
	}

	//para usar variables super globales,
	//usaremos htmlentities
	
	$came_from = htmlentities($_SERVER['HTTP_REFERER']);

	echo $came_from;

	echo "True vale: " . true;
	echo "<br>False vale: " . false;

	//uso del if
	$bank_balance = 10;
	if($bank_balance < 100)
	{
		$money = 1000;
		$bank_balance += $money;
		echo "valor de bank_balance: $bank_balance<br>";
	}

	$number1 = 12;
	$number2 = 13;

	if($number1 > 50)
	{
		echo "number1 es mayor que 50";
	}
	else if($number2 > 10)
	{
		echo "number2 es mayor que 13";
	}
	else
	{
		echo "lo que sea";
	}

	//uso del switch
	$switch_number = 20;

	switch ($switch_number) 
	{
		case 12:
			echo "vale 12";
			break;
		case 20:
			echo "vale 20<br>";
			break;
		default:
			echo "valor default";
			break;
	}

	$como_me_siento = "mal";

	echo ($como_me_siento == "mal") ? "joder" : "que bien";

	echo "<br>";

	//uso de while
	//
	$w = 12;
	while ($w > 1) 
	{echo "<br>w vale: $w";
		--$w;
	}

	echo "<br>";
	$x = 10;

	do
	{
		echo "x vale: $x<br>";
		$x--;
	}while($x > 1);

	for ($contador = 0; $contador < 20; $contador++) 
	{ 
		echo "el contador vale: " . $contador . "<br>";
	}

	?>

</body>
</html>














