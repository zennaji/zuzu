<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Overzicht</title>
</head>

<body>
    <div class="container mt-5">
        <div class="confirm-page ">
            <h1 class="text-primary">Overzicht : Bestelling</h1>
            <h3 class="text-info">Klant gegevens</h3>
            <div class="client-info">
                <?php session_start();  ?>
                <p class="text-secondary">Voornaam: <?= $_SESSION["Voornaam"] ?> <br>
                    Achternaam: <?= $_SESSION["Achternaam"] ?> <br>
                    Adres: <?= $_SESSION["Adres"] ?> <br>
                    Postcode: <?= $_SESSION["Post_code"] ?> <br>
                    Woonplaats: <?= $_SESSION["Woonplaats"] ?>
                </p>
            </div>
            <hr class="p-auto">
            <h3 class="text-info">Bestelling gegevens</h3>
            <div class="order-info class="text-secondary"">
                Sushi: <?= $_SESSION["order"] ?> <br>
                Aantaal: <?= $_SESSION["quantity"] ?>
                </p>
                <form action="" method="POST">
                   <a href="client.php"> <button type="submit" class="btn btn-primary">OK</button></a> 
                </form>

            </div>
        </div>
    </div>
    

</body>

<script src="js/bootstrap.min.js"></script>
</html>
<?php
if (isset($_POST['submit'])) {
    session_destroy();
    
}

?>