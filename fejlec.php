<!DOCTYPE html>
<html lang="hu">
    
    <body>

        <header>

            <table style="width:100%;border: 2px solid #E3E7E9">

                <tr>

                    <th>
                        <?php
                            
                            if (isset($_SESSION['felhaszmail'])) {
                                echo 'Belépve mint: '.$_SESSION['felhaszmail'];

                                ?>

                    </th>
                                <th>
                                <div class="col-2">
                                <div><a href="../cart.php"><span class="kosar">KOSÁR</span>
                                <?php		// Mutat egy számot a kosár ikonnál, hogy hány darab termék van eddig benne
                                    if(!empty($_SESSION["shopping_cart"])) {
                                    $cart_count = count(array_keys($_SESSION["shopping_cart"]));
                                ?>
                    
                                    <span><?php echo $cart_count; ?></span>
                                    <?php
                                    }
                                    ?>
                                    </a>
        
                                    </div>
                                    </th>
                                 <!-- Kosár href & Kosár számláló -->
                    
                                
                    <th>                
                                <button> <a href=useradatok.php>Profilom szerkesztése</button>
                    </th>
                    <th>            
                                <button> <a href=sessiontorol.php>Kijelentkezés</button>
                    </th>
                                <?php

                            }else{
                                

                                echo 'Jelentkezz be vagy regisztrálj!';
                                ?>
                                <!-- Kosár href & Kosár számláló -->
                                <th>

                                <div class="col-2">
                                <div><a href="../cart.php"><span class="kosar">KOSÁR</span>
                                <?php		// Mutat egy számot a kosár ikonnál, hogy hány darab termék van eddig benne
                                    if(!empty($_SESSION["shopping_cart"])) {
                                    $cart_count = count(array_keys($_SESSION["shopping_cart"]));
                                ?>

                                    <span><?php echo $cart_count; ?></span>
                                    <?php
                                    }
                                    ?>
                                    </a>
        
                                    </div>
                                </th>
                                 <!-- Kosár href & Kosár számláló -->

<?php
                            }  

                        ?>
                    </th>

                </tr>

            </table>

        </header>

    </body>
        
</html>