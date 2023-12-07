<?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    // TODO 設問見直し
    $date = date('Y-m-d');
    $time = date('H:i:s');

    $data = new stdClass();
    $data -> date = $date;
    $data -> time = $time;
    $data -> name = $name;
    $data -> mail = $mail;

    print_r($data);
    echo "<br>"."確認用"."<br>";
    $json_data = json_encode($data);
    file_put_contents('data.txt', $json_data . PHP_EOL, FILE_APPEND);
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