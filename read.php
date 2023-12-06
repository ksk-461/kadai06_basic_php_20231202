<?php
    $data = "[".file_get_contents('data.txt')."]";
    echo nl2br($data);
    $json_array = json_encode($data);
    // $array = array($data);
    // echo var_dump($array)."<br>";
    // echo $array[0]."<br>";
    // print_r($array)."<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read</title>
</head>
<body>
    read
    <a href="./post.php">post</a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        const data = <?= $json_array ?>;
        console.log(data);
    </script>
</body>
</html>