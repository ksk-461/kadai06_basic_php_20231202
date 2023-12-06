<?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    // TODO 設問見直し
    $date = date('Y-m-d');
    $time = date('H:i:s');
    $data = json_encode(array(
        // "id:".$id.
        "date"=>$date, //2個目以降にするなら,つける→arrayに変更したから無視
        "time"=>$time,
        "name:"=>$name,
        "mail"=>$mail,
    )).
    // echo $data;
    print_r($data);
    $current_data = file_get_contents('data.txt');
    $current_data .= $data . PHP_EOL;
    file_put_contents('data.txt', $current_data, FILE_APPEND);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write</title>
        <!-- TODO タイトル後で直す -->
</head>
<body>
    write
    <a href="./post.php">post</a>
    <a href="./read.php">read</a>
</body>
</html>