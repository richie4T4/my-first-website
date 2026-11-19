<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form actions="index.php" method="post">
        <label>radius:</label><br> 
        <input type="text" name="radius"><br>
        <input type="submit" value="calculate"><br>
    </form>
</body>
</html>
<?php
    $radius = $_POST["radius"];
    $circumference=null;

    $circumference= 2 * pi() * $radius;
    $circumference=round($circumference, 2);

    $area= pi()*$radius*$radius;
    $area=round($area, 2);

    $volume=(4/3)*pi()*pow($radius, 3);
    $volume=round($volume, 2);


    echo "circumference={$circumference}cm <br>";
    echo "area={$area}cm^2 <br>";
    echo "volume={$volume}cm^3 <br>";
?>