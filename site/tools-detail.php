<?php

require 'database.php';

$id = $_GET['tool_id'];

$sql = "SELECT * FROM tools WHERE tool_id = $id";

$result = mysqli_query($conn, $sql);

$tool = mysqli_fetch_assoc($result);

print_r($tool);
