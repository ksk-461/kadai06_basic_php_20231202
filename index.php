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
        <h1>good night</h1>
        <div id="clock2">
            <div id="hour-hand2"></div>
            <div id="minute-hand2"></div>
            <div id="second-hand2"></div>
        </div>
        <form action="confirm.php" method="post">
            <div class="time">
                Sun.
                <input type="time" class="form" name="sun_st" value="21:00">
                ～
                <input type="time" class="form" name="sun_ed" value="00:00">
            </div>
            <div class="time">
                Mon.
                <input type="time" class="form" name="mon_st" value="21:00">
                ～
                <input type="time" class="form" name="mon_ed" value="00:00">
            </div>
            <div class="time">
                Tue.
                <input type="time" class="form" name="tue_st" value="21:00">
                ～
                <input type="time" class="form" name="tue_ed" value="00:00">
            </div>
            <div class="time">
                Wed.
                <input type="time" class="form" name="wed_st" value="21:00">
                ～
                <input type="time" class="form" name="wed_ed" value="00:00">
            </div>
            <div class="time">
                Thu.
                <input type="time" class="form" name="thu_st" value="21:00">
                ～
                <input type="time" class="form" name="thu_ed" value="00:00">
            </div>
            <div class="time">
                Fri.
                <input type="time" class="form" name="fri_st" value="21:00">
                ～
                <input type="time" class="form" name="fri_ed" value="00:00">
            </div>
            <div class="time">
                Sat.
                <input type="time" class="form" name="sat_st" value="21:00">
                ～
                <input type="time" class="form" name="sat_ed" value="00:00">
            </div>
            <input type="submit" class="submit" value="submit">
        </form>
    </div>
    <script src="./js/index.js"></script>
</body>
</html>