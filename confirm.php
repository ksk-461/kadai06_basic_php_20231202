<?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $date = $_POST['date'];
    $sun_st = $_POST['sun_st'];
    $sun_ed = $_POST['sun_ed'];

    
    $time1 = $sun_st;
    $time2 = $sun_ed;

    // 一日を超える場合の処理
    if ($time2 < $time1) {
        $datetime1 = new DateTime($time1);
        $datetime2 = new DateTime($time2);
        $datetime2->modify('+1 day'); // 日付を次の日に設定
    } else {
        $datetime1 = new DateTime($time1);
        $datetime2 = new DateTime($time2);
    }

    // 時間の差を計算
    $interval = $datetime1->diff($datetime2);

    // 差分から睡眠時間を取得
    $hours = $interval->format('%h');
    $minutes = $interval->format('%i');

    // 睡眠時間を出力する
    echo '睡眠時間は' . $hours . '時間 ' . $minutes . '分です';

    
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