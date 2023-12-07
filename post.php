<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
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
            <form action="write.php" method="post">
                <div>
                    <div class="name"><input type="text" class="form" name="name" placeholder="name"></div>
                    <div class="mail"><input type="text" class="form" name="mail" placeholder="mail"></div>
                    <!-- <div><input type="date" id="sunday" class="form" name="date" value="2023-11-26"></div> -->
                </div>
                <div class="time">
                    Sun.
                    <input type="time" class="form st" name="sun" value="06:00">
                    <!-- ～
                    <input type="time" class="form ed" name="sun_ed" value="07:00"> -->
                </div>
                <div class="time">
                    Mon.
                    <input type="time" class="form st" name="mon" value="06:00">
                    <!-- ～
                    <input type="time" class="form ed" name="mon_ed" value="07:00"> -->
                </div>
                <div class="time">
                    Tue.
                    <input type="time" class="form st" name="tue" value="06:00">
                    <!-- ～
                    <input type="time" class="form ed" name="tue_ed" value="07:00"> -->
                </div>
                <div class="time">
                    Wed.
                    <input type="time" class="form st" name="wed" value="06:00">
                    <!-- ～
                    <input type="time" class="form ed" name="wed_ed" value="07:00"> -->
                </div>
                <div class="time">
                    Thu.
                    <input type="time" class="form st" name="thu" value="06:00">
                    <!-- ～
                    <input type="time" class="form ed" name="thu_ed" value="07:00"> -->
                </div>
                <div class="time">
                    Fri. 
                    <input type="time" class="form st" name="fri" value="06:00">
                    <!-- ～
                    <input type="time" class="form ed" name="fri_ed" value="07:00"> -->
                </div>
                <div class="time">
                    Sat.
                    <input type="time" class="form st" name="sat" value="06:00">
                    <!-- ～
                    <input type="time" class="form ed" name="sat_ed" value="07:00"> -->
                </div>
                <input type="submit" class="submit" value="submit">
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>