<!DOCTYPE html>
<html>
<head>
	<title>Constructores de subclases</title>
</head>
<body>

<?php  

	$object = new Tiger();

	echo "Tigers have...<br>";
	echo "Fur: " . $object->fur."<br>";
	echo "Stripes: ".$object->stripes;
	
	class Wildcat
	{
		public $fur;

		function __construct()
		{
			$this->fur = "TRUE";
		}
	}

	class Tiger extends Wildcat
	{
		public $stripes;

		function __construct()
		{
			parent::__construct(); //llama al constructor de la clase padre

			$this->stripes = "TRUE";
		}
	}
?>

</body>
</html>