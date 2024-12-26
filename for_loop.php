<html>
<h1>
    <?php

    echo "Here are some For Loop code";
    // for ($i = 1; $i <= 3; $i++) {
    //     for ($j = 1; $j <= 3; $j++) {
    //         echo "$i x $j = " . ($i * $j) . "<br>";
    //     }
    //     echo "<br>"; // Add a blank line between rows
    // }

    for ($i = 1; $i <= 10; $i++) {
        if ($i == 8) break; // Stop when $i is 5
        echo "Number: $i<br>";
    }

    for ($i = 1; $i <= 5; $i++) {
        if ($i == 3) continue; // Skip when $i is 3
        echo "aaaNumber: $i<br>";
    }


    ?>

</h1>

</html>