<?php
$product = $_POST['product'];
$quantity = $_POST['quantity'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$payment = $_POST['payment'];

define('Porsche_911_GT2_RS', 525000);
define('Porsche_918_Spyder', 500000);
define('Porsche_911_GT3_R', 195000);
define('Porsche_Macan_GTS', 77880);

$price = 0;

if ($product == 'Porsche_911_GT2_RS') {
    $price = $quantity * Porsche_911_GT2_RS;
} elseif ($product == 'Porsche_918_Spyder') {
    $price = $quantity * Porsche_918_Spyder;
} elseif ($product == 'Porsche_911_GT3_R') {
    $price = $quantity * Porsche_911_GT3_R;
} elseif ($product == 'Porsche_Macan_GTS') {
    $price = $quantity * Porsche_Macan_GTS;
}

echo "<h1>Transakcija je uspešno izvršena</h1>";

echo "<b>Vaše ime:</b> $name <br>";
echo "<b>Vaše prezime:</b> $surname <br><br>";

echo "<b>Vaš datum rođenja:</b> $dob <br>";
echo "<b>Pol:</b> $gender <br>";
echo "<b>Vaša email adresa:</b> $email <br>";
echo "<b>Način plaćanja:</b> $payment <br><br>";

echo "<b>Transakcija je uspešno izvršena dana: " . date("Y/m/d-") . date("h:i:sa") . "<br><br>";

echo "<b>Količina automobila:</b> $quantity <br>";
echo "<b>Ukupna cena vaše narudžbine je: $price</b> <br>"; 
?>
