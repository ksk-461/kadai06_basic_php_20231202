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

    function ToMin($time){
        $tArry=explode(":",$time);
        $hour=$tArry[0]*60;//時間→分
        $mins=$hour+$tArry[1];//分だけを足す
        return $mins;
    }
    $sun_min = Tomin($sun);
    $mon_min = ToMin($mon);
    $tue_min = ToMin($tue);
    $wed_min = ToMin($wed);
    $thu_min = ToMin($thu);
    $fri_min = ToMin($fri);
    $sat_min = ToMin($sat);
    $week = array($sun_min, $mon_min, $tue_min, $wed_min, $thu_min, $fri_min, $sat_min);
    $week_min = array_sum($week);

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
    $data -> total = $week_min;

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
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/write.css">
    <title>write</title>
</head>
<body>
    <div class="wrap">
        <h1><?= $name ?>'s Amont of Sleep</h1>
        <div class="chart">
            <canvas id="myChart"></canvas>
        </div>
        <div class="tab_content">
            <button class="submit" onclick="location.href='./post.php'">back</button>
            <button class="submit" onclick="location.href='./read.php'">check</button>
            <!-- <div class="submit"><p><a href="./post.php" style="text-decoration:none;" >back</a></p></div>
            <div class="submit"><p><a href="./read.php" style="text-decoration:none;" >check</a></p></div> -->
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
            datasets: [{
            label: 'minutes of sleep',
            data: [<?= $sun_min ?>, <?= $mon_min ?>, <?= $tue_min ?>, <?= $wed_min ?>, <?= $thu_min ?>, <?= $fri_min ?>, <?= $sat_min ?>],
            borderWidth: 1
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });
    </script>
</body>
</html>