<!DOCTYPE html>
<html>
<head>
	<title>Funciones array php</title>
</head>
<body>

<?php  

	//uso de is_array() para verificar si la variable
	//es un array o no 
	$array = array(1,2,3,4,5);
	$jose = "jose";

	echo (is_array($array) ? "Es un array" : "No es un array!!!<br>");

	echo "<br>";

	echo (is_array($jose) ? "Es un array" : "No es un array!!!<br>");

	//count() nos regresa la longitud del array
	echo count($array) . " elementos contiene array";
	echo "<br>";

	//sort para ordenar un array
	$arrayNumero = array(2,4,6,1,12,34,43,9,56);
	sort($arrayNumero);

	foreach ($arrayNumero as $k) 
		echo $k . " ";

	$nombres = array('josele','bart', 
					 'nelson', 'milhouse');

	sort($nombres, SORT_STRING);
	echo "<br>";

	foreach ($nombres as $key)
		echo "$key ";

	echo "<br>";

	rsort($arrayNumero, SORT_NUMERIC);
	rsort($nombres, SORT_STRING);

	foreach ($arrayNumero as $k) 
		echo $k . " ";

	echo "<br>";

	foreach ($nombres as $key)
		echo "$key ";
	echo "<br>";

	/*shufle para barajear los elementos de un array*/

	$cartasYugi = array("mago oscuro", "dragon ojos rojos",
						"maga oscura", "summoned skull",
						"mago del caos", "exodia", "slider");

	shuffle($cartasYugi);
	foreach ($cartasYugi as $key)
		echo "$key ";

	echo "<br>";

	//explode, para dividir cada palabra de un String con 
	//un espacio o un caracter
	$temp = explode(' ', "Hola que tal? mi nombre es Abraham!!!!");
	print_r($temp);
	echo "<br>";

	//de igual manera lo podemos hacer un caracter
	$temp = explode('###',"Hola###como###estamos###el###dia###de###hoy?");
	print_r($temp);

	//la funcion extract se debe retomar al trabar con
	//forms, segun con el metodo get o post 
	
	#COMPACT
	#Creamos un arrau al asignarle el nombre de algunas #variables
	
	$fname = 'Doctor';
	$sname = 'Who';
	$planet = 'Gallifrey';
	$system = 'Gridlock';
	$constellation = 'Kasterborous';

	$contact = compact('fname', 'sname', 'planet',	
					   'system', 'constellation');

	echo "<br>";
	print_r($contact);

	#se puede utilizar para depurar el codigo
	
	$j 		 = 23;
	$temp 	 = 'Hello';
	$address = '1 Old Street';
	$age 	 = 61;
	echo "<br>";
	print_r(compact(explode(' ',"j temp address age")));

	#reset
	//regresa el puntero del array al primer elemento, y 
	//si lo asignamos a una variable, este nos deuelve el
	//primer elemento del array
	//
	echo "<br>";
	reset($array);
	$primerElemento = reset($arrayNumero);
	echo $primerElemento;

	#End,
	#lo contrario de reset, este nos devuelve el ultimo #elemento
	#
	$ultimoElemento = end($array);
	echo "<br>$ultimoElemento";
	
?>
</body>
</html>