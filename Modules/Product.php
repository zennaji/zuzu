<?php 
include_once './Modules/config.php';
include_once './Classes/Product.php';


function getProduct(){
    global $pdo;
    $q = "SELECT * FROM product ";
    $stmt = $pdo->prepare($q);
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
    $stmt->execute();
    
    $result = $stmt;
    return $result;
}





?>