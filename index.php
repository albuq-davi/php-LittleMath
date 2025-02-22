
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little Math</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Little Math Version 02</h1>
    <hr>
    
</body>
</html>

<!--PHP PORTION-->
<?php
 
  $num01 = 5;
  $num02 = 2;
  $sum = $num01 + $num02;
  $sub = $num01 - $num02;
  $mult = $num01 * $num02;
  $division = $num01 / $num02;
  $module = $num01 % $num02;
  $power = $num01 ** $num02;
  

  echo "The numbers are $num01 and $num02";
  echo "
        <ul>
            <li>$num01 + $num02 = $sum</li>
            <li>$num01 - $num02 = $sub</li>
            <li>$num01 * $num02 = $mult</li>
            <li>$num01 / $num02 = $division</li>
            <li>$num01 % $num02 = $module</li>
            <li>$num01 ** $num02 = $power</li>
        </ul>
    ";

?>






