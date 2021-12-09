<?php 
include_once './Modules/config.php';
include_once './Classes/Client.php';

function saveClient($vNaam,$aNaam,$adres,$pcode,$wPlaats){
    global $pdo;
    $q = "INSERT INTO client (`vNaam`, `aNaam`, `adres`, `postcode`, `woonplaats`) VALUES (:vNaam, :aNaam, :adres, :postcode, :woonplaats)";
    $stmt = $pdo->prepare($q);
    $stmt->bindParam(':vNaam', $vNaam);
    $stmt->bindParam(':aNaam', $aNaam);
    $stmt->bindParam(':adres', $adres);
    $stmt->bindParam(':postcode', $pcode);
    $stmt->bindParam(':woonplaats', $wPlaats);

    $stmt->execute();

}


function getClient(){
    global $pdo;
    $q = "SELECT * FROM client ";
    $stmt = $pdo->prepare($q);
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Client');
    $stmt->execute();
}





?>