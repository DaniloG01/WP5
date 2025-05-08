<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kontakt informacije</title>
</head>
<body>
    <h1>Kontakt informacije</h1>
    <p><strong>Ime:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Naslov:</strong> <?php echo $subject; ?></p>
    <p><strong>Poruka:</strong> <?php echo $message; ?></p>
    <button><a href="kontakt.html">Idi nazad</a></button>
</body>
</html>
