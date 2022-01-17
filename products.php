<?php 
include_once './Modules/Product.php';
session_start();

$productErrors = '';

if(isset($_POST['order'])){

    if(isset($_POST['prod'])){
        $type = $_POST['prod'];
    }else{
        $productErrors= 'Kies een sushi AUB !';
    }
    if(isset($_POST['quantity'])){
        $quantity = $_POST['quantity'];
    }else{
        $productErrors .= 'Kies een hoeveelheid aub !';
    }

    
    
        
        
 
    
    if($productErrors === ''){
        
        $_SESSION["order"] = $_POST['prod'];
        $_SESSION["quantity"] = $_POST['quantity'];
        // echo $_SESSION["order"];
        // echo $_SESSION["quantity"];
        header("location:order.php");

  
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Producten pagina</title>
</head>

<body>
    <div class="container mt-5">
        <form action="products.php" method="post">
           
            <?php 
            $product = getProduct();
            foreach($product as $data): ?>
                <input type="radio" name="prod" class="form-check-input" value="<?= $data->naam ?>"> <span style="color: blue; font-weight:bold " ><?= $data->naam ?></span> <br> 
                <label class="text-success" for="Nigiri">op voorraad : <?= $data->hoeveelheid ?></label> <br>
                 <select name="quantity" id="quantity"  class="form-control">
                <option value="" disabled selected>---kies hoeveel stuks ---</option>
                <?php  for($i = 1; $i<= $data->hoeveelheid; $i++ ): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                </select>
                <hr>
                
                <?php endforeach; ?>
            
                <h1 style="color: red;" class="error"><?= $productErrors; ?></h1>
                <button type="submit" name="order" class="btn btn-primary">Bestel</button>
                <br>
             
                             
            </form>

    </div>
    
    
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
