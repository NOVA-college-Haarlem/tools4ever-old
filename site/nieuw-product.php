<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Nieuw product invoeren</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Nieuw product</h1>
    <form action="verwerk-nieuw-product.php" method="post">
        <div class="form-groep">
            <label for="naamProduct">Naam product</label>
            <input type="text" name="naamProduct" id="naamProduct" required>
        </div>
        <div class="form-groep">
            <label for="categorieProduct">Categorie product</label>
            <input type="text" name="categorieProduct" id="categorieProduct">
        </div>
        <div class="form-groep">
            <label for="prijsProduct">Prijs product</label>
            <input type="text" name="prijsProduct" id="prijsProduct">
        </div>
        <div class="form-groep">
            <label for="merkProduct">Merk product</label>
            <input type="text" name="merkProduct" id="merkProduct">
        </div>
        <button type="submit">Maak nieuw product!</button>
    </form>
</body>

</html>