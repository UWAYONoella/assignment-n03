<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ASSIGNMENT3</title>
</head>
<body>

<form action="index.php" method="GET">

NUMBER X : <input type="number" name="numbera"><br><br>
NUMBER y : <input type="number" name="numberb"><br><br>
<input type="submit" value="Calculate">

</form>

<u><h1> Solution</h1></u>
<?php 

$x=$_GET['numbera'];
$y=$_GET['numberb'];
$sum=$x+$y;
echo "|x+y| =".abs($sum)."<br>";
echo "|x|+|y| =".(abs($x)+abs($y))."<br>";
echo "x^3/x+y=" .pow($x,3)/($sum)."<br>";
echo "√x^6+y^5 =".(sqrt($x^6)+($y^5))."<br>";
echo "(x +√y)^7 =".pow(($x+sqrt($y)),7);

?>
</body>
</html>











