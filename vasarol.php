<?php
require_once("adatbazis.php");
session_start();

if (isset($_SESSION['felhaszmail'])) {   //Ha van a session-nek tartalma

    $email = $_SESSION['felhaszmail'];

    //echo $email;

    $sql = "SELECT * FROM userdata WHERE mail='$email'";
    $select = $db_connect->query($sql);
    $eredmeny = mysqli_num_rows($select);

    if($eredmeny > 0){
        
        $sql = "SELECT game_points FROM user WHERE mail='$email'";
        $select = $db_connect->query($sql);
        $eredm = mysqli_query($db_connect, $sql);

        if(mysqli_num_rows($eredm) > 0){

            while($row = mysqli_fetch_assoc($eredm)) {
            $ertek = ($row["game_points"]);
            }
            //echo $ertek;

            if($ertek>0){

                $sq = "UPDATE user SET game_points = 0 WHERE mail = '$email' ";
                $leke = $db_connect->query($sq);
                echo "Ügysen játszottál így a szállítást mi álljuk!";

            }else{
            echo "A házhozszállítás díja 1500 ft";
            }

        }

    }else{
        echo '<script>alert("A szállítási adatok üresek!")</script>';
        include "useradatok.php";
    }
    
}else{
    
    echo '<script>alert("Csak regisztrált tagok vásárolhatnak! Jelentkezz be vagy regisztrálj!")</script>';
    include "log_reg.php";
}
?>