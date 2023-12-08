<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>read</title>
</head>
<body>
    <?php
    $cul = file('data.txt');
    // print_r($cul);
    $length = count($cul);

    for($i = 0; $i < $length; $i ++){
        $data = json_decode($cul[$i]);
        echo '-------------------------------------------------------------------------------------------------------------------------'.'<br>';
        echo "<div class='result'>";
        echo '<h2>'.$i + 1 .':';
        echo $data->name .'</h2><br>';
        echo 'mail:'.$data->mail.'<br>';
        echo 'Sun:'.$data->sun;
        echo ' / Mon:'.$data->mon;
        echo ' / Tue:'.$data->tue;
        echo ' / Wed:'.$data->wed;
        echo ' / Thu:'.$data->thu;
        echo ' / Fri:'.$data->fri;
        echo ' / Sat:'.$data->sat.'<br>';
        echo 'total:'.$data->total;
        echo "</div>";
    }
    ?>
    <button class="submit" onclick="location.href='./post.php'">retry</button>
</body>
</html>