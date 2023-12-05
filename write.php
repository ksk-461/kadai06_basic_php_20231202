<?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    // TODO 設問見直し
    $time = date('Y/m/d H:i:s');
    $data = "{".
        "id:".$id.
        ",time:".$time.
        ",name:".$name.
        ",mail:".$mail.
    ",},";
    file_put_contents('data.txt', $data, FILE_APPEND);
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