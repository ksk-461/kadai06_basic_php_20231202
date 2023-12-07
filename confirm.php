<?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $date = $_POST['date'];
    $sun_st = $_POST['sun_st'];
    $sun_ed = $_POST['sun_ed'];
    echo $sun_st;
    echo "<br>";
    echo $sun_ed;
    echo "<br>";

// 時間変換断念
//     function time_replace($Date){
//         $Date = str_replace(":", "-", $Date);
//         $Date = str_replace("T", " ", $Date);
//         $Date = $Date."-00";
//         return $Date;
//     }

//     echo time_replace($sun_ed);
//     echo "<br>";
//     echo time_replace($sun_st);
//     echo "<br>";
//     echo (time_replace($sun_ed) - time_replace($sun_st));
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