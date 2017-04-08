<!DOCTYPE html>
<html>
<head>
	<title>Overriding a method</title>
</head>
<body>

<h1>Overriding a method</h1>
<br>
<?php  
	$object = new Son();
	$object->test();
	$object->test2();

	class Dad
	{
		function test()
		{
			echo "[Class Dad] I am your father<br>";
		}
	}

	Class Son extends Dad
	{
		function test()
		{
			echo "[Class Son] I am Luke<br>";
		}

		function test2()
		{
			parent::test();
		}
	}
?>

</body>
</html>