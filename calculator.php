<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	</title>Calculator</title>
</head>
<body>
	<form action="calculator.php" method="post" name="cal">
		<input type="text" name="num1" placeholder="Enter the first number">
		<input type="text" name="num2" placeholder="Enter the second number">
		<select name="operator">
			<option>Operate</option>
			<option>Add</option>
			<option>Subtract</option>
			<option>Multiply</option>
			<option>Divide</option>
		</select>
		<button type="submit" name="submit">Calculate</button>
	</form>
	
	<p>The result is:</p>


	<?php
 	if(isset($_POST['submit'])){
 
 		$num1 = $_POST['num1'];
 		$num2 = $_POST['num2'];
 		$operator = $_POST['operator'];


        switch($operator){

 			case "Add":
 				echo $num1 + $num2;
 				break;
 
 			case "Subtract":
 				echo $num1 - $num2;
 				break;
 			case "Multiply":
 				echo $num1 * $num2;
 				break;
 
 			case "Divide":
 				echo $num1 / $num2;
 				break;
 			default:
 				echo "Please select operator";
 }
 
 }
 
 ?>

</body>
</html>
