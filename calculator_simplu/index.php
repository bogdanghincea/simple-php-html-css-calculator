<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Calculator simplu HTML, CSS, PHP</title>
<link rel="stylesheet" type="text/css" href="assets/style/principal.css">
</head>
<body>

	<?php
	if(isset($_POST['submit']))
    
        {
		
        $firstNumber = $_POST['firstNumber'];
		$seccondNumber = $_POST['seccondNumber'];
		$operation = $_POST['operation'];

		switch($operation){
			case "+":
				$result = $firstNumber + $seccondNumber;
				break;
			case "-":
				$result = $firstNumber - $seccondNumber;
				break;
			case "*":
				$result = $firstNumber * $seccondNumber;
				break;
			case "/":
			    $result = $firstNumber / $seccondNumber;
				break;

		}
	}
	?>

<div class="calculator">
	<h1>HTML+CSS+PHP Calculator</h1>
	<form method="post" action="index.php">
		<label>Numărul 1:</label>
		<input class="number" type="text" name="firstNumber"><br><br>
		<label>Numărul 2:</label>
		<input class="number" type="text" name="seccondNumber"><br><br>
		<label>Operație:</label>
		<select class="operation" name="operation">
			<option value="+">Adunare [+]</option>
			<option value="-">Scădere [-]</option>
			<option value="*">Înmulțire [x]</option>
			<option value="/">Împărțire [:]</option>
		</select><br><br>
		<input class="button" type="submit" name="submit" value="Calculează">

        <div class="result">
        <?php  	echo "<h2>Rezultat:  $result</h2>"; ?>
        </div>

	</form>
</div>

<footer class="footer">
    &copy 2023 - Bogdan Ghincea
</footer>

</body>
</html>
