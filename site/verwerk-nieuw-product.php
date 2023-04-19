<?php
require 'database.php';



//verwerk-nieuw-product.php
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    include '405.php';
    exit;
}


//check of er wel een correct getal is ingevoerd
if (!is_numeric($_POST['prijsProduct'])) {
    echo 'number is NOT found';
    exit;
}



//check hoe lang de lengte van een string is
if (strlen($_POST['naamProduct']) < 3) {
    echo "Een naam moet minimaal uit 3 tekens bestaan";
    exit;
}

if (empty($_POST['categorieProduct'])) {
    echo "Er moet een categorie opgegeven worden! Deze mag niet leeg zijn!";
    exit;
}

$naam      = $_POST['naamProduct'];
$categorie = $_POST['categorieProduct'];
$prijs     = $_POST['prijsProduct'];
$merk      = $_POST['merkProduct'];


$sql = "INSERT INTO tools (tool_name, tool_category, tool_price, tool_brand) VALUES ('$naam', '$categorie', '$prijs', '$merk' )";

mysqli_query($conn, $sql);
