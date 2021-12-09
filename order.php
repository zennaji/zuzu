<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht</title>
</head>

<body>
    <div class="confirm-page">
        <h1>Overzicht : Bestelling</h1>
        <h3>Klant gegevens</h3>
        <div class="client-info">
            <?php session_start();  ?>
            <p>Voornaam: <?= $_SESSION["Voornaam"] ?> <br>
                Achternaam: <?= $_SESSION["Achternaam"] ?> <br>
                Adres: <?= $_SESSION["Adres"] ?> <br>
                Postcode: <?= $_SESSION["Post_code"] ?> <br>
                Woonplaats: <?= $_SESSION["Woonplaats"] ?>
            </p>
        </div>
        <hr>
        <h3>Bestelling gegevens</h3>
        <div class="order-info">
            Sushi: <?= $_SESSION["order"] ?> <br>
            Aantaal: <?= $_SESSION["quantity"] ?>
            </p>
            <form action="order.php" method="post">
                <button type="submit">OK</button>
            </form>

        </div>
    </div>

</body>

</html>
<?php
if (isset($_POST['submit'])) {
    session_destroy();
    header("location:client.php");
}

?>