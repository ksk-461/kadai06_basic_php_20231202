<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>index</title>
</head>
<body>
    <div class="wrap">
        <h1>How long did you sleep?</h1>
        <div id="clock2">
            <div id="hour-hand2"></div>
            <div id="minute-hand2"></div>
            <div id="second-hand2"></div>
        </div>
        <div class="select">
            <form action="confirm.php" method="post">
                <div>
                    <div class="name"><input type="text" class="form" name="name" placeholder="name"></div>
                    <div class="mail"><input type="text" class="form" name="mail" placeholder="mail"></div>
                    <!-- <div><input type="date" id="sunday" class="form" name="date" value="2023-11-26"></div> -->
                </div>
                <div class="time">
                    Sun.
                    <input type="datetime-local" class="form st" name="sun_st" value="2023-12-03 21:00">
                    ～
                    <input type="datetime-local" class="form ed" name="sun_ed" value="2023-12-04 09:00">
                </div>
                <div class="time">
                    Mon.
                    <input type="datetime-local" class="form st" name="mon_st" value="2023-12-04 21:00">
                    ～
                    <input type="datetime-local" class="form ed" name="mon_ed" value="2023-12-05 09:00">
                </div>
                <div class="time">
                    Tue.
                    <input type="datetime-local" class="form st" name="tue_st" value="2023-12-05 21:00">
                    ～
                    <input type="datetime-local" class="form ed" name="tue_ed" value="2023-12-06 09:00">
                </div>
                <div class="time">
                    Wed.
                    <input type="datetime-local" class="form st" name="wed_st" value="2023-12-06 21:00">
                    ～
                    <input type="datetime-local" class="form ed" name="wed_ed" value="2023-12-07 09:00">
                </div>
                <div class="time">
                    Thu.
                    <input type="datetime-local" class="form st" name="thu_st" value="2023-12-07 21:00">
                    ～
                    <input type="datetime-local" class="form ed" name="thu_ed" value="2023-12-08 09:00">
                </div>
                <div class="time">
                    Fri. 
                    <input type="datetime-local" class="form st" name="fri_st" value="2023-12-08 21:00">
                    ～
                    <input type="datetime-local" class="form ed" name="fri_ed" value="2023-12-09 09:00">
                </div>
                <div class="time">
                    Sat.
                    <input type="datetime-local" class="form st" name="sat_st" value="2023-12-09 21:00">
                    ～
                    <input type="datetime-local" class="form ed" name="sat_ed" value="2023-12-10 09:00">
                </div>
                <input type="submit" class="submit" value="good night">
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./js/index.js"></script>
</body>
</html>