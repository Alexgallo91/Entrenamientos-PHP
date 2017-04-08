<!DOCTYPE html>
<html>
<head>
	<title>arrays</title>
</head>
<body>

<?php  
	$paper[] = "Copier";
	$paper[] = "Inkjet";
	$paper[] = "Laser";
	$paper[] = "Photo";

	print_r($paper);

	for($i = 0; $i < count($paper); $i++)
	{
		echo "<br>$i - $paper[$i]";
	}

	/*Array asociativa*/
	$papel['copier'] = "Copier & Multipurpose";
	$papel['inkjet'] = "Inkjet Printer";
	$papel['laser'] = "Laser printer";
	$papel['copier'] = "Copier & Multipurpose";

	/*associative arrays*/

	$papel['copier'] = "copier & multipurpose";
	$papel['inkjet'] = "inkjet printer";
	$papel['laser'] = "laser printer";
	$papel['photo'] = "photographic paper";

	echo "<br><br>".$papel['laser']."<br>";

	print_r($papel);

	/*otra forma de asignacion de valores en un array*/

	$papel = null;
	$papel = array("copier", 
				   "inkjet",
				   "laser",
				   "photo");

	echo "<br><br>";
	print_r($papel);

	$papel = null; // liberamos papel
	$papel = array('copier' => 'copier & multipurpose',
				   'inkjet' => 'inkjet printer',
				   'laser'  => 'laser printer',
				   'photo'  => 'photographic paper');

	echo "<br><br>";
	print_r($papel);

?>

</body>
</html>