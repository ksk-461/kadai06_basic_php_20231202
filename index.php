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
                    <div><input type="text" class="form" name="mail" placeholder="mail"></div>
                </div>
                <div class="time">
                    Sun.
                    <input type="time" class="form" name="sun_st" value="22:00">
                    ～
                    <input type="time" class="form" name="sun_ed" value="07:00">
                </div>
                <div class="time">
                    Mon.
                    <input type="time" class="form" name="mon_st" value="22:00">
                    ～
                    <input type="time" class="form" name="mon_ed" value="07:00">
                </div>
                <div class="time">
                    Tue.
                    <input type="time" class="form" name="tue_st" value="22:00">
                    ～
                    <input type="time" class="form" name="tue_ed" value="07:00">
                </div>
                <div class="time">
                    Wed.
                    <input type="time" class="form" name="wed_st" value="22:00">
                    ～
                    <input type="time" class="form" name="wed_ed" value="07:00">
                </div>
                <div class="time">
                    Thu.
                    <input type="time" class="form" name="thu_st" value="22:00">
                    ～
                    <input type="time" class="form" name="thu_ed" value="07:00">
                </div>
                <div class="time">
                    Fri. 
                    <input type="time" class="form" name="fri_st" value="22:00">
                    ～
                    <input type="time" class="form" name="fri_ed" value="07:00">
                </div>
                <div class="time">
                    Sat.
                    <input type="time" class="form" name="sat_st" value="22:00">
                    ～
                    <input type="time" class="form" name="sat_ed" value="07:00">
                </div>
                <input type="submit" class="submit" value="good night">
            </form>
        </div>
    </div>
    <script src="./js/index.js"></script>
</body>
</html>