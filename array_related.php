<html>
<h1>
    <?php

    $keys = ["name", "age", "city"];
    $values = ["Alice", 25, "New York"];
    $person = array_combine($keys, $values);
    var_export($person);
    echo "<br><br>";

    $string = "Red,Green,Blue";
    $colors = explode(",", $string);
    var_export($colors);
    echo "<br><br>";

    $colors = ["Red", "Green", "Blue"];
    $string = implode(", ", $colors);
    var_export($string);
    echo "<br><br>";

    $numbers = [1, 2, 3, 4, 435, 34];
    $squared = array_map(fn($n) => $n * $n, $numbers);
    print_r($squared);
    var_export($squared);
    echo "<br><br>";



    ?>

</h1>

</html>