<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Time in IST</title>
    <script>
        function startClock() {
            let serverTime = new Date("<?php echo date('Y-m-d H:i:s'); ?>");
            let timezoneOffset = 19800; // Offset for IST in seconds (5 hours 30 minutes)

            function updateClock() {
                // Add the IST offset to the current server time
                serverTime.setSeconds(serverTime.getSeconds() + 1);
                let hours = serverTime.getHours();
                let minutes = serverTime.getMinutes();
                let seconds = serverTime.getSeconds();

                // Format the time to 2-digits
                hours = hours < 10 ? "0" + hours : hours;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                // Update all elements with the 'liveClock' class
                const clockElements = document.querySelectorAll(".liveClock");
                clockElements.forEach(el => {
                    el.innerText = `${hours}:${minutes}:${seconds}`;
                });
            }

            // Update the clock every second
            setInterval(updateClock, 1000);
            updateClock();
        }
    </script>
</head>
<body onload="startClock()">
    <h1 align="left" class="liveClock" >Loading...</h1>
    <h1 align= "center" class="liveClock" >Loading...</h1>
    <h1 align= "right" class="liveClock" >Loading...</h1>
</body>
</html>
