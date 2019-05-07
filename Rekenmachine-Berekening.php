<!DOCTYPE html>
<html lang="en">
<head>
	<title> Rekenmachine</title>
	<meta charset="UTF-8">
</head>

	<body>
	<?php
		$X=$_GET["X"];
		$Y=$_GET["Y"];
		if($_GET["bereken"]=="+")
		{
			$berekening= $X + $Y;
			echo "De uitkomst is: ".  $berekening;
		}
		
		if($_GET["bereken"]=="-")
		{
			$berekening= $X - $Y;
			echo "De uitkomst is: ".  $berekening;
		}
		
		if($_GET["bereken"]=="*")
		{
			$berekening= $X * $Y;
			echo "De uitkomst is: ".  $berekening;
		}
		
		if($_GET["bereken"]=="/")
		{
			if($Y == 0)
			{
				echo "Dit kan niet";
			}
			else
			{
				$berekening= $X / $Y;
			echo "De uitkomst is: ".  $berekening;
			}
		}
		
		if($_GET["bereken"]=="x2")
		{
			$berekening= $X * $X;
			echo "De uitkomst is: ".  $berekening;
		}
		
		if($_GET["bereken"]=="Vx")
		{
			if($X < 0)
			{
				echo "Dit kan niet";
			}
			else
			{
				$berekening= sqrt($X);
				echo "De uitkomst is: " . $berekening;
			}
		}
		
		if($_GET["bereken"]=="Tx")
		{	
			for($i = 1; $i <= 10; $i++)
			{
				echo "$i x $X = " . ($i * $X) . "<br>";
			}
		
		}
		
		if($_GET["bereken"]=="xY")
		{
			$berekening= $X ** $Y;
			echo "De uitkomst is: " . $berekening;
		}
		

	?>
		
		
		<br>
		<a href="Rekenmachine-invoer.php">Nieuwe berekening</a>
	</body>
</html>