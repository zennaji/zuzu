<?php 
include_once './Modules/Client.php';

session_start();
$infoErrors = [
    'vnError' => '',
    'anError' => '',
    'adresError' => '',
    'pcError' => '',
    'wpError' => '',
];
// array maken om errors op te slaan :
if(isset($_POST['submit'])){
    $vNaam = strip_tags($_POST['Voornaam']);
    if(empty($vNaam)){
        $infoErrors['vnError'] = 'Voornaam is verplicht';
    }
    $aNaam = strip_tags($_POST['Achternaam']);
    if(empty($aNaam)){
        $infoErrors['anError'] = 'Achternaam is verplicht';
    }
    $adres = strip_tags($_POST['Adres']);
    if(empty($adres)){
        $infoErrors['adresError'] = 'Adres is verplicht';
    }
    $pCode= strip_tags($_POST['Post_code']);
    if(empty($pCode)){
        $infoErrors['pcError'] = 'Postcode is verplicht';
    }
    $wPlaats = strip_tags($_POST['Woonplaats']);
    if(empty($wPlaats)){
        $infoErrors['wpError'] = 'Woonplaats is verplicht';
    }

    if(!array_filter($infoErrors)){
        saveClient($vNaam,$aNaam,$adres,$pCode,$wPlaats);
        $_SESSION["Voornaam"] = $_POST['Voornaam'];
        $_SESSION["Achternaam"] = $_POST['Achternaam'];
        $_SESSION["Adres"] = $_POST['Adres'];
        $_SESSION["Post_code"] = $_POST['Post_code'];
        $_SESSION["Woonplaats"] = $_POST['Woonplaats'];
        header("location:products.php");
    }
   
    // if($_SESSION["email"] === $_POST['Voornaam'] ){
        
    // }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gegevens pagina</title>
</head>
<body>
    <div class="info_container">
        <h2>Vul je gegevens in.</h2>
        <form action="client.php" method="post">
            <input type="text" name="Voornaam" placeholder="Voornaam"> <br>
            <div class="error"><?php echo $infoErrors['vnError'];  ?></div>
            <input type="text" name="Achternaam" placeholder="Achternaam"> <br>
            <div class="error"><?php echo $infoErrors['anError'];  ?></div>
            <input type="text" name="Adres" placeholder="Adres"> <br>
            <div class="error"><?php echo $infoErrors['adresError'];  ?></div>
            <input type="text" name="Post_code" placeholder="Postcode"> <br>
            <div class="error"><?php echo $infoErrors['pcError'];  ?></div>
            <input type="text" name="Woonplaats" placeholder="Woonplaats"> <br> 
            <div class="error"><?php echo $infoErrors['wpError'];  ?></div> <br>
            <button type="submit" name="submit">OK</button>
        </form>
    </div>
</body>
</html>

<?php 


?>