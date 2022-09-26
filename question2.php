<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSIGNMENT3</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
   <div class="main">

    <form action="question2.php" method="GET" class="form2">

Type width: <input type="number" name="width"><br><br>
Type height : <input type="number" name="height"><br><br>
<input type="submit" value="Calculate">

</form>

<h1>Solution</h1>
<?php 

$x=$_GET['width'];
$y=$_GET['height'];

echo "Perimeter of Rectangle : ".(($x+$y)*2)."<br>";
echo "Area of Rectangle : ".($x*$y)."<br>";



?>
  </div>  
</body>
</html>

