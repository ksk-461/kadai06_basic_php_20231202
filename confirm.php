<?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $date = $_POST['date'];
    $sun_st = $_POST['sun_st'];
    $sun_ed = $_POST['sun_ed'];
    echo strtotime($sun_st);
    echo "<br>";
    echo strtotime($sun_ed);
    echo "<br>";
    echo $sun_st - $sun_ed;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>confirm</title>
</head>
<body>
    
</body>
</html>