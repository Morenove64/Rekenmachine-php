<!DOCTYPE html>
<html lang="nl">
<head>
	<title> RekenenFormulier9</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href= "Rekenmachine.css">
</head>
	
	
	<body>
		<div id="Rekenmachine">
			<form action="Rekenmachine-Berekening.php" method="get">
				Geef X: <input class="invoer" type="text" name="X"><br/>
				Geef Y: <input class="invoer" type="text" name="Y"><br/>
				<input type="submit" name="bereken" value= "+">
				<input type="submit" name="bereken" value="-">
				<input type="submit" name="bereken" value= "*"><br/>
				<input type="submit" name="bereken" value= "/">
				<input type="submit" name="bereken" value= "x2">
				<input type="submit" name="bereken" value= "Vx"><br/>
				<input type="submit" name="bereken" value= "Tx">
				<input type="submit" name="bereken" value= "xY">
				<input type="reset" class="reset" name="reset" value= "clear">
			</form>
		</div>
	</body>
</html>