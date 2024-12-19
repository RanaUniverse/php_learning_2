<!DOCTYPE html>
<html lang="en">
<?php
$tz_name = "Asia/Kolkata";
date_default_timezone_set($tz_name);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Time</title>
</head>

<body>
    <h1>
        <?php
        echo "These Below date & time are for $tz_name <br><br>";
        echo "Today Date is " . date("Y/m/d") . "<br>";
        echo "Today Now Time is: " . date("h-i-s-u") . "<br>";
        echo "Today Day Name is: " . date("l") . "<br>";
        echo "Checking Time is:" . time() . "<br>";
        echo date("h:i A", time());

        ?>

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="help.php">Help</a></li>
                <li><a href="current_time.php">Know Now time</a></li>
            </ul>
        </nav>
    </h1>
</body>

</html>