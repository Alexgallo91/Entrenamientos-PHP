<!DOCTYPE html>
<html>
<head>
	<title>Methodos finales</title>
</head>
<body>

<?php  
	
	$usuario = new User();
	$usuario->copyright();

	class User
	{
		final function copyright()
		{
			echo "This class was written by Alexis Abraham!!!";
		}
	}
?>

</body>
</html>