<?php
session_start();
include('../adatbazis.php');
$status="";
if (isset($_POST['barcode']) && $_POST['barcode']!=""){
$barcode = $_POST['barcode'];								
$result = mysqli_query($db_connect,"SELECT * FROM `ssd` WHERE `barcode`='$barcode'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$barcode = $row['barcode'];
$pricehuf = $row['pricehuf'];
$picture = $row['picture'];

$cartArray = array(
	$barcode=>array(
	'name'=>$name,
	'barcode'=>$barcode,
	'pricehuf'=>$pricehuf,
	'piece'=>1,
	'picture'=>$picture
	));

// Vásárlás gomb üzenetei:
if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Termék hozzáadva a kosaradhoz!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($barcode,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		A termék már benne van a kosaradban!</div>";
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Termék hozzáadva a kosaradhoz!</div>";
	}

	}
}
?>

<?php
if (isset($_SESSION['felhaszmail'])) { //Amennyiben a seisson tartalma nem üres

        $sql = "SELECT * FROM ssd";
        $lekerdez = $db_connect->query($sql);
        $eredmeny = mysqli_query($db_connect, $sql);
}?>


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
<!--  ↓↓ DIVIRI ↓↓  -->
<!--  ↓↓ DIVIRI ↓↓  -->
<div class="container">
<!--  ↓↓ Login, register gombok ↓↓  -->
<!--  ↓↓ Login, register gombok ↓↓  -->
<div class="header">

	<header>
	<?php include("fejlec.php"); ?>
	</header>

</div> <!-- Header záró div-je  -->
<!--  ↑↑ Login, register gombok ↑↑  -->
<!--  ↑↑ Login, register gombok ↑↑  -->



<!--  ↓↓ Vertical NAV-bar ↓↓  -->
<!--  ↓↓ Vertical NAV-bar ↓↓  -->
<div class="vertical" class="col-12">


<input type="checkbox" id="Match" name="Match" value="Match">
<label for="vehicle1">Kompatibilitás</label><br>


<div class="">
    <ul>
        <li><a href="../index.php">Főoldal</a></li>
        <li><a href="parts.php">Alkatrészek</a></li>
    </ul>
</div>


<div>
  <label for="">SSD</label><br>
  <input type="checkbox" id="myCheck" name="" onclick="myFunction()">
  <label for="">2.5</label>
</div>
<div>
  <input type="checkbox" id="" name="">
  <label for="">3.5</label>
</div>
<div>
  <input type="checkbox" id="" name="">
  <label for="">nVME</label>
</div>
<br>


<div>
  <label for="">Márka</label><br>
</div>
<div>
  <input type="checkbox" id="" name="">
  <label for="">Samsung</label>
</div>
<div>
  <input type="checkbox" id="" name="">
  <label for="">Crucial</label>
</div>
<div>
  <input type="checkbox" id="" name="">
  <label for="">Western Digital</label>
</div>


<br>
</div>
<!--  ↑↑ Vertical NAV-bar ↑↑  -->
<!--  ↑↑ Vertical NAV-bar ↑↑  -->





<!--  ↓↓ Horizontal NAV-bar ↓↓  -->
<!--  ↓↓ Horizontal NAV-bar ↓↓  -->
<div class="horizontal">
  <div class="horizontal-row">

    <div class="col-4"><a href="ssd.php" ><button class="navigator">SSD</button></a></div>
	  <div class="col-1"><a href="hdd.php" ><button class="navigator">HDD</button></a></div>
    <div class="col-1"><a href="nvme.php" ><button class="navigator">NVME</button></a></div>

	  <div class="col-1"><a href="alaplap.php" ><button class="navigator">Alaplap</button></a></div>
	  <div class="col-1"><a href="cpu.php" ><button class="navigator">CPU</button></a></div>
	  <div class="col-1"><a href="ram.php" ><button class="navigator">RAM</button></a></div>
	  <div class="col-1"><a href="gpu.php" ><button class="navigator">GPU</button></a></div>
	  <div class="col-1" ><a href="tapegyseg.php" ><button class="navigator">Tápegység</button></a></div>

  </div>
</div>
<!--  ↑↑ Horizontal NAV-bar ↑↑  -->
<!--  ↑↑ Horizontal NAV-bar ↑↑  -->




<!--  ↓↓ TERMÉKEK ↓↓  -->
<!--  ↓↓ TERMÉKEK ↓↓  -->
<div class="products">


<?php
$result = mysqli_query($db_connect,"SELECT * FROM `ssd`");			// Az összes táblából kell az adat nekünk
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='card'>
			  <form method='post' action=''>
			  <input type='hidden' name='barcode' value=".$row['barcode']." />
			  <div class='itempicture'><img src='".$row['picture']."' /></div>
			  <div class='name'>".$row['name']."</div>
			  <br>
		   	<div class='pricehuf'>Ára: ".$row['pricehuf']." Ft</div>
			  <br>
			  <div><button type='submit' class='buy'>Kosárba</button></div>
        <br><br>
			  </form>
		   	</div>";
        }
mysqli_close($db_connect);
?>

  
</div>
<!--  ↑↑ TERMÉKEK ↑↑  -->
<!--  ↑↑ TERMÉKEK ↑↑  -->




<!--  ↓↓ FOOTER ↓↓  -->
<!--  ↓↓ FOOTER ↓↓  -->
<div class="footer">


<td class="footertabla">
  <th><div>Navigáció</div></th>
  <th><div>Számítógépek</div></th>
  <th><div>Laptopok</div></th>
  <th><div>Alkatrészek</div></th>
</td>
<td class="footertabla">
  <th><div>Elérhetőségek</div></th>
  <th><div>Akemi</div></th>
  <th><div>Bertold</div></th>
  <th><div>Dávid</div></th>
</td>
<td class="footertabla">
  <th><div>Java Játék</div></th>
  <th><div>Dokumentáció</div></th>
  <th><div>History</div></th>
  <th><div>Helyfoglaló</div></th>
</td>


</div>
<!--  ↑↑ FOOTER ↑↑  -->
<!--  ↑↑ FOOTER ↑↑  -->
</div>
<!--  ↑↑ DIVIRI ↑↑  -->
<!--  ↑↑ DIVIRI ↑↑  -->




<!--  ↓ Bootstrap Scripts ↓  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
<!--  ↑ Bootstrap Scripts ↑  -->
</body>



<!--  ↓ Saját scriptek ↓  -->
<script src="../Javascript/checkbox.js"></script>
<script src="../Javascript/pluszminus.js"></script>
<script src="../Javascript/myscripts.js"></script>
<!--  ↑ Saját scriptek ↑  -->
</html>
