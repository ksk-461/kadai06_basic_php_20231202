<?php
    $cul = file("data.txt");
    print_r($cul);
    echo "<br>";
    echo "カウント"."<br>";
    count($cul);
    echo "以下cul0"."<br>";
    echo ($cul[0]);
    echo "<br>";
    echo $file;
?>

<!-- <!DOCTYPE html>
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
        const data = JSON.parse(<?= $data ?>);
        console.log(data);
    </script>
</body>
</html> -->