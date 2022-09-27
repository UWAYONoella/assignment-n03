<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>study</title>
</head>
<body>
    <?php
    $color="red";
    // $code="me"
    echo"My car is".$color."<br>";
    // echo"My car is".$code."<br>";
    // echo"My car is".$COLOR."<br>"
    // echo"My car is".$coLOR."<br>"
     $x=5;
     echo "<p>variable inside function is $x</p>";
     echo "<br>";
     $y=45.78;
     var_dump($y);
     $car=array("volvo","toyota","BMW");
     var_dump($car);
     $a="hello world";
     $a=null;
     var_dump($a);
     echo strlen("hello word");
     echo "<br>";
     define("GREETING", "Welcome here!");
     echo GREETING;
     echo "<br>";
     for($a=0;$a<10;$a++){
        if($a==4){
           break;
        }
        echo "the number is : $a <br>";
     }
    //  $d=4;
    
    //  $power=$d**(sqrt(9));
    //  echo $power;
    // $t=date("H");
    //  if ($t <"20") 
    //     echo "Have a good day!"
         

    ?>
</body>
</html>