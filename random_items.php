<?php
function generateRandomRGB()
{
    // Generate random values for R, G, and B
    $r = rand(0, 255);
    $g = rand(0, 255);
    $b = rand(0, 255);

    // Return the RGB tuple
    return [$r, $g, $b];
}

// Generate and display the RGB value
$rgb = generateRandomRGB();
echo "RGB Color: (" . implode(", ", $rgb) . ")";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Data PHP_ROUND_HALF_DOWN</title>
</head>

<body>
    <h1>Here You Will Be Able to See Some Random Things</h1>
    <h2>

        <?php
        // Generate a random number between 343 and 90889
        echo "A Random Number is: ";
        echo rand(1, 3343) . "<br>";

        echo random_int(1, 100) . "<br>";
        echo "RGB Color: (" . implode(", ", $rgb) . ")";

        ?>

    </h2>

</body>

</html>