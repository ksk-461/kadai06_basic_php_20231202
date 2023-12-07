<?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $sun = $_POST['sun'];
    $mon = $_POST['mon'];
    $tue = $_POST['tue'];
    $wed = $_POST['wed'];
    $thu = $_POST['thu'];
    $fri = $_POST['fri'];
    $sat = $_POST['sat'];
    $date = date('Y-m-d');
    $time = date('H:i:s');

    $data = new stdClass();
    $data -> name = $name;
    $data -> mail = $mail;
    $data -> sun = $sun;
    $data -> mon = $mon;
    $data -> tue = $tue;
    $data -> wed = $wed;
    $data -> thu = $thu;
    $data -> fri = $fri;
    $data -> sat = $sat;
    $data -> date = $date;
    $data -> time = $time;

    $json_data = json_encode($data);
    file_put_contents('data.txt', $json_data . PHP_EOL, FILE_APPEND);

    
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
    <link rel="stylesheet" href="./css/style.css">
    <title>write</title>
</head>
<body>
    <div class="wrap">
        <h1>completed</h1>
        <div class="submit"><p><a href="./post.php">back</a></p></div>
        <div class="submit"><p><a href="./read.php">check</a></p></div>
    </div>
</body>
</html>