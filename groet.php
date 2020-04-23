<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Wie is daar?</title>
</head>

<!-- Content -->
<body>
    
    <!-- H1 - Main -->
    <h1>Schrijf Hallo Computer</h1>

    <!-- Main Form -->
    <form method="post">
        <input type="text" name="number_1">

        <input type="submit" name="submit">
    </form>
</body>
</html>

<!-- PHP Start -->
<?php
// Submit click check
    if (isset($_POST['submit'])) {
    $server_reaction = $_POST['number_1'];
    if ($server_reaction == "Hallo Computer") {
        echo "Hallo Gebruiker!";
    }
    if ($server_reaction == "hallo computer") {
        echo "Hallo Gebruiker!";
    }
}
// PHP End
?>