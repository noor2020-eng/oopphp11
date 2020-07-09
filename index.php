<?php
declare(strict_types = 1);
include 'includes/autoload.inc.php';
?>

<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title></title>

</head>

<body>
	<form action="includes/calc.inc.php" method="post">
		<p>My own calculator!</p>
		<input type="number" name="num1" placeholder="First number">
		<select name="oper">
			<option value="add">Add</option>
			<option value="sub">Sub</option>
			<option value="div">Div</option>
			<option value="mul">Mul</option>
		</select>
		<input type="number" name="num2" placeholder="Second number">
		<button type="submit" name="submit">Calculate</button>
	</form>

</body>

</html>
