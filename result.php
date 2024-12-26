<!DOCTYPE html>
<html>

<head>
    <title>Result</title>
</head>

<body>
    <h1>
        <?php
        if (!empty($_GET['name'])) {
            $name = htmlspecialchars($_GET['name']);
            echo "Hello, " . $name . "!" .
                " You have total " . strlen($name) . " characters in your name.";
            echo "<br><br>";
            echo "<a href='form.php'>Enter Name Again Freshly</a>";
        } else {
            echo "Error: No name provided. Please go back to the form.";
            echo "<br><br>";
            echo "<a href='form.php'>Go Back to Form</a>";
        }
        ?>
    </h1>
</body>

</html>