<?php
function generateRandomRGB()
{
    $r = rand(0, 255);
    $g = rand(0, 255);
    $b = rand(0, 255);

    return [$r, $g, $b];
}

$rgb = generateRandomRGB();
$rgbString = implode(", ", $rgb);
$cssColor = "rgb(" . implode(", ", $rgb) . ")";


echo "RGB Color: (" . implode(", ", $rgb) . ")";
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ColorFull Pages</title>
    <style>
        body {
            background-color: <?php echo $cssColor; ?>;
        }
    </style>
</head>

<body>
    <h1>You will Now see a random color</h1>

    <h2>

        <?php
        echo "The Color Code which is getting generate is: " . $rgbString;
        ?>

    </h2>
</body>

</html>