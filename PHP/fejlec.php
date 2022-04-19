<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ↓ Javascriptek ↓ -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- ↑ Javascriptek ↑ -->
    
    <!--  ↓ Bootstrap Stylesheet ↓  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
    <!--  ↑ Bootstrap Stylesheet ↑  -->
    <title>Webshop / SSD</title>
    <!--  ↓ Custom Stylesheet ↓  -->
    <link rel="stylesheet" href="../CSS/styles.css">
    <link href="../Pictures/favicon.ico">
    <!--  ↑ Custom Stylesheet ↑  -->
</head>
<body>

    
<div class="row">

    <!-- Team Logo -->
    <div class="col-9"><img src="../Pictures/TeamF.png" alt="Team Logo" class="teamlogo"></div>

    <!-- Kosár href & Kosár számláló -->
    <div class="col-1">
    <div><a href="../cart.php" class="cart"><span class="kosar">Kosár:</span><?php		// Mutat egy számot a kosár ikonnál, hogy hány darab termék van eddig benne
        if(!empty($_SESSION["shopping_cart"])) {
        $cart_count = count(array_keys($_SESSION["shopping_cart"]));?>

        <span><?php echo $cart_count; ?></span>
        <?php
        }
        ?></a>
    </div>
        
            <!-- Kosár href & Kosár számláló -->

    </div>

    <!-- Felhasználó email címe -->
    <div class="col-1">
    <a href="../log_reg.php">    <button class="l">
    <?php
        if (isset($_SESSION['felhaszmail'])) {
            echo ''.$_SESSION['felhaszmail']; 
            ?>
            <button> <a href=../useradatok.php>Profilom szerkesztése</button>
            <?php   ////////////////////////////// JAVÍTANI
        
        }else{echo 'Bejelentkezés';}?></button>
    </div></a>


    <div class="col-1"><button> <a href="../sessiontorol.php">Kijelentkezés</button></div>
</div>

</body>      
</html>