<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo de foreach</title>
</head>
<body>
<?php  

	$paper = array("copier", "inkjet", 
				   "laser", "photo");
	foreach ($paper as $item) 
	{
		echo "$item<br>";
	}

	$paper = array('copier' => "copier & multipurpose",
				   'inkjet' => "inkjet printer",
				   'laser'  => "laser printer",
				   'photo'  => "photographic paper");
	echo "<br><br>";
	echo "<h2>Ejemplo de foreach con array associativa</h2>";
	foreach ($paper as $item => $description) 
	{
		echo "<br>$item => $description";
	}

	echo "<br><br>";
	
	//o tambien se puede imprimir de la siguiente manera
	while (list($item, $description) = each($paper)) 
	{
		echo "$item: $description";
	}
	//aunque ni funciono en mi caso, optemos por foreach
	
	list($a, $b) = array('Alice','Bob');
	echo "$a $b";
?>

</body>
</html>