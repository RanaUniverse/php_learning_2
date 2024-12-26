<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
        // Redirect to the result page with the name as a query parameter
        header("Location: result.php?name=" . urlencode($name));
        exit;
    } else {
        // Redirect back to the form with an error message
        header("Location: form.php?error=empty");
        exit;
    }
}
