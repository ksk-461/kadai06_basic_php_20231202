<?php
    $cul = file('data.txt');
    // print_r($cul);
    $length = count($cul);
    $data = json_decode($cul[1]);
    print_r($data);
    echo $data->name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>read</title>
</head>
<body>
    
    <script src="./js/read.js"></script>
</body>
</html>