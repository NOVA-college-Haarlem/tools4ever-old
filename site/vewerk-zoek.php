<?php


if(empty($_POST['zoekveld'])){
    header("location: index.php");
    exit;
}

$zoekterm = $_POST['zoekveld'];

require 'database.php';

$sql = "SELECT * FROM tools WHERE tool_name LIKE '%$zoekterm%'";

$result = mysqli_query($conn, $sql);

$tools = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (!is_array($tools)) {
    header("location: index.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoekresultaten</title>
</head>

<body>
    <h1>Zoekresultaten</h1>
    <?php foreach ($tools as $tool) : ?>
        <p>
            <?php echo $tool['tool_name']; ?>
            <?php echo $tool['tool_price']; ?>
            <img src="<?php echo $tool['tool_image'] ?>" alt="">
        </p>
    <?php endforeach; ?>
</body>

</html>