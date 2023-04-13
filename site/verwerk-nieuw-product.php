<?php
require 'database.php';

$naam      = $_POST['naamProduct'];
$categorie = $_POST['categorieProduct'];
$prijs     = $_POST['prijsProduct'];
$merk      = $_POST['merkProduct'];


$sql = "INSERT INTO tools (tool_name, tool_category, tool_price, tool_brand) VALUES ('$naam', '$categorie', '$prijs', '$merk' )";

var_dump(mysqli_query($conn, $sql));
