<!DOCTYPE html>
<html>
<head>
	<title>Multidimensional arrays en php</title>
</head>
<body>

<?php  

	//<<<<<<<<<ARRAY PRODUCTS>>>>>>>>>>>
	$products = array(
		'paper' => array(
			"copier" => "copier & multipurpose",
			"inkjet" => "inkjet printer",
			"laser"  => "laser printer",
			"photo"  => "photographic paper"
			),

		"pens" => array(
			"ball"   => "ball point",
			"hilite" => "highlighters",
			"marker" => "markers"
			),

		"misc" => array(
			"tape"   => "sticky tape",
			"glue"   => "adhesives",
			"clips"  => "paperclips"
			)
		);

	echo "<pre>";

	foreach($products as $section => $items)
		foreach ($items as $key => $value)
			echo "$section:\t$key\t$value<br>";

	echo "</pre>";

	//poemos acceder a cada uno de los elementos del aray
	//de la siguiente manera
	
	echo $products['misc']['clips']."<br>";

	echo "<br><br>";
	//tablero de ajedrez
	//
	$chessboard = array(
						array('r','n','b','q','k','b','n','r'),
						array('p','p','p','p','p','p','p','p'),
						array(' ',' ',' ',' ',' ',' ',' ',' '),
						array(' ',' ',' ',' ',' ',' ',' ',' '),
						array(' ',' ',' ',' ',' ',' ',' ',' '),
						array(' ',' ',' ',' ',' ',' ',' ',' '),
						array('p','p','p','p','p','p','p','p'),
						array('r','n','b','q','k','b','n','r')
						);

	//las piezas de la parte inferior del tablero las pasamos a mayusculas
	for($i = (count($chessboard) - 2); $i < count($chessboard); $i++)
	{
		for($b = 0; $b < count($chessboard[$i]); $b++)
		{
			$chessboard[$i][$b] = strtoupper($chessboard[$i][$b]);
			//echo $chessboard[$i][$b] . " ";
		}
	}

	//impresion tablero ordenado
	echo "<pre>";
	foreach ($chessboard as $fila) 
	{
		foreach ($fila as $columna)
			echo "$columna";
		echo "<br>";
	}

	echo "</pre>";
?>

</body>
</html>