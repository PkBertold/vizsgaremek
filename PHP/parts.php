<?php
session_start();
include('../adatbazis.php');
$status="";
if (isset($_POST['barcode']) && $_POST['barcode']!=""){
$barcode = $_POST['barcode'];								
//$result = mysqli_query($db_connect,"SELECT * FROM hdd, ssd, ram, vga;");
$result = mysqli_query($db_connect,"SELECT * FROM hdd");
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
include('../adatbazis.php');
$status="";
if (isset($_POST['barcode']) && $_POST['barcode']!=""){
$barcode = $_POST['barcode'];								
//$result = mysqli_query($db_connect,"SELECT * FROM hdd, ssd, ram, vga;");
$result2 = mysqli_query($db_connect,"SELECT * FROM ssd");
$row = mysqli_fetch_assoc($result2);
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
include('../adatbazis.php');
$status="";
if (isset($_POST['barcode']) && $_POST['barcode']!=""){
$barcode = $_POST['barcode'];								
//$result = mysqli_query($db_connect,"SELECT * FROM hdd, ssd, ram, vga;");
$result3 = mysqli_query($db_connect,"SELECT * FROM nvme");
$row = mysqli_fetch_assoc($result3);
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
include('../adatbazis.php');
$status="";
if (isset($_POST['barcode']) && $_POST['barcode']!=""){
$barcode = $_POST['barcode'];								
//$result = mysqli_query($db_connect,"SELECT * FROM hdd, ssd, ram, vga;");
$result4 = mysqli_query($db_connect,"SELECT * FROM motherboard");
$row = mysqli_fetch_assoc($result4);
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
include('../adatbazis.php');
$status="";
if (isset($_POST['barcode']) && $_POST['barcode']!=""){
$barcode = $_POST['barcode'];								
//$result = mysqli_query($db_connect,"SELECT * FROM hdd, ssd, ram, vga;");
$result5 = mysqli_query($db_connect,"SELECT * FROM ram");
$row = mysqli_fetch_assoc($result5);
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
include('../adatbazis.php');
$status="";
if (isset($_POST['barcode']) && $_POST['barcode']!=""){
$barcode = $_POST['barcode'];								
//$result = mysqli_query($db_connect,"SELECT * FROM hdd, ssd, ram, vga;");
$result6 = mysqli_query($db_connect,"SELECT * FROM processor");
$row = mysqli_fetch_assoc($result6);
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
include('../adatbazis.php');
$status="";
if (isset($_POST['barcode']) && $_POST['barcode']!=""){
$barcode = $_POST['barcode'];								
//$result = mysqli_query($db_connect,"SELECT * FROM hdd, ssd, ram, vga;");
$result7 = mysqli_query($db_connect,"SELECT * FROM ram");
$row = mysqli_fetch_assoc($result7);
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
include('../adatbazis.php');
$status="";
if (isset($_POST['barcode']) && $_POST['barcode']!=""){
$barcode = $_POST['barcode'];								
//$result = mysqli_query($db_connect,"SELECT * FROM hdd, ssd, ram, vga;");
$result8 = mysqli_query($db_connect,"SELECT * FROM vga");
$row = mysqli_fetch_assoc($result8);
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
    <title>Parts</title>
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
	<?php include("../fejlec.php"); ?>
	</header>





</div> <!-- Header záró div-je  -->
<!--  ↑↑ Login, register gombok ↑↑  -->
<!--  ↑↑ Login, register gombok ↑↑  -->



<!--  ↓↓ Vertical NAV-bar ↓↓  -->
<!--  ↓↓ Vertical NAV-bar ↓↓  -->
<div class="vertical">


<input type="checkbox" id="Match" name="Match" value="Match">
<label for="vehicle1">Kompatibilitás</label><br>


<div class="">
    <ul>
        <li><a href="../index.php">Főoldal</a></li>
        <li><a href="parts.php">Alkatrészek</a></li>
    </ul>
</div>


<div>
  <label for="">Power Supply</label><br>
  <input type="checkbox" id="" name="">
  <label for="">500 W</label>
</div>
<div>
  <input type="checkbox" id="" name="">
  <label for="">600 W</label>
</div>
<div>
  <input type="checkbox" id="" name="">
  <label for="">700 W</label>
</div>

<br>


</div>

<br>


</div>
<!--  ↑↑ Vertical NAV-bar ↑↑  -->
<!--  ↑↑ Vertical NAV-bar ↑↑  -->





<!--  ↓↓ Horizontal NAV-bar ↓↓  -->
<!--  ↓↓ Horizontal NAV-bar ↓↓  -->
<div class="horizontal">
    <div class="horizontal-row">    
        <div class="col-1"><a href="ssd.php" ><button>SSD</button></a></div>
	    <div class="col-1"><a href="hdd.php" ><button>HDD</button></a></div>
        <div class="col-1"><a href="nvme.php" ><button>NVME</button></a></div>

	    <div class="col-1"><a href="alaplap.php" ><button>Alaplap</button></a></div>
	    <div class="col-1"><a href="cpu.php" ><button>CPU</button></a></div>
	    <div class="col-1"><a href="ram.php" ><button>RAM</button></a></div>
	    <div class="col-1"><a href="gpu.php" ><button>GPU</button></a></div>
	    <div class="col-1"><a href="tapegyseg.php" ><button>Tápegység</button></a></div>

        <div><input type="text"></div>
        <button>keresés</button>
    </div>
</div>
<!--  ↑↑ Horizontal NAV-bar ↑↑  -->
<!--  ↑↑ Horizontal NAV-bar ↑↑  -->




<!--  ↓↓ TERMÉKEK ↓↓  -->
<!--  ↓↓ TERMÉKEK ↓↓  -->
<div class="products">


<?php
$result = mysqli_query($db_connect,"SELECT * FROM hdd");	// Az összes táblából kell az adat nekünk
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='itemcard'>
			  <form method='post' action=''>
			  <input type='hidden' name='barcode' value=".$row['barcode']." />
			  <div class='picture'><img src='".$row['picture']."' /></div>
			  <div class='name'>".$row['name']."</div>
			  <br>
		   	  <div class='pricehuf'>Ára: ".$row['pricehuf']." Ft</div>
			  <br>
			  <button type='submit' class='buy'>Vásárlás</button>
			  </form>
		   	  </div>";
        }
?>

<?php
$result2 = mysqli_query($db_connect,"SELECT * FROM ssd");	// Az összes táblából kell az adat nekünk
while($row = mysqli_fetch_assoc($result2)){
		echo "<div class='itemcard'>
			  <form method='post' action=''>
			  <input type='hidden' name='barcode' value=".$row['barcode']." />
			  <div class='picture'><img src='".$row['picture']."' /></div>
			  <div class='name'>".$row['name']."</div>
			  <br>
		   	  <div class='pricehuf'>Ára: ".$row['pricehuf']." Ft</div>
			  <br>
			  <button type='submit' class='buy'>Vásárlás</button>
			  </form>
		   	  </div>";
        }
?>

<?php
$result3 = mysqli_query($db_connect,"SELECT * FROM nvme");	// Az összes táblából kell az adat nekünk
while($row = mysqli_fetch_assoc($result3)){
		echo "<div class='itemcard'>
			  <form method='post' action=''>
			  <input type='hidden' name='barcode' value=".$row['barcode']." />
			  <div class='picture'><img src='".$row['picture']."' /></div>
			  <div class='name'>".$row['name']."</div>
			  <br>
		   	  <div class='pricehuf'>Ára: ".$row['pricehuf']." Ft</div>
			  <br>
			  <button type='submit' class='buy'>Vásárlás</button>
			  </form>
		   	  </div>";
        }
?>

<?php
$result4 = mysqli_query($db_connect,"SELECT * FROM motherboard");	// Az összes táblából kell az adat nekünk
while($row = mysqli_fetch_assoc($result4)){
		echo "<div class='itemcard'>
			  <form method='post' action=''>
			  <input type='hidden' name='barcode' value=".$row['barcode']." />
			  <div class='picture'><img src='".$row['picture']."' /></div>
			  <div class='name'>".$row['name']."</div>
			  <br>
		   	  <div class='pricehuf'>Ára: ".$row['pricehuf']." Ft</div>
			  <br>
			  <button type='submit' class='buy'>Vásárlás</button>
			  </form>
		   	  </div>";
        }
?>

<?php
$result5 = mysqli_query($db_connect,"SELECT * FROM ram");	// Az összes táblából kell az adat nekünk
while($row = mysqli_fetch_assoc($result5)){
		echo "<div class='itemcard'>
			  <form method='post' action=''>
			  <input type='hidden' name='barcode' value=".$row['barcode']." />
			  <div class='picture'><img src='".$row['picture']."' /></div>
			  <div class='name'>".$row['name']."</div>
			  <br>
		   	  <div class='pricehuf'>Ára: ".$row['pricehuf']." Ft</div>
			  <br>
			  <button type='submit' class='buy'>Vásárlás</button>
			  </form>
		   	  </div>";
        }
?>

<?php
$result6 = mysqli_query($db_connect,"SELECT * FROM processor");	// Az összes táblából kell az adat nekünk
while($row = mysqli_fetch_assoc($result6)){
		echo "<div class='itemcard'>
			  <form method='post' action=''>
			  <input type='hidden' name='barcode' value=".$row['barcode']." />
			  <div class='picture'><img src='".$row['picture']."' /></div>
			  <div class='name'>".$row['name']."</div>
			  <br>
		   	  <div class='pricehuf'>Ára: ".$row['pricehuf']." Ft</div>
			  <br>
			  <button type='submit' class='buy'>Vásárlás</button>
			  </form>
		   	  </div>";
        }
?>



<?php
$result7 = mysqli_query($db_connect,"SELECT * FROM ram");	// Az összes táblából kell az adat nekünk
while($row = mysqli_fetch_assoc($result7)){
		echo "<div class='itemcard'>
			  <form method='post' action=''>
			  <input type='hidden' name='barcode' value=".$row['barcode']." />
			  <div class='picture'><img src='".$row['picture']."' /></div>
			  <div class='name'>".$row['name']."</div>
			  <br>
		   	  <div class='pricehuf'>Ára: ".$row['pricehuf']." Ft</div>
			  <br>
			  <button type='submit' class='buy'>Vásárlás</button>
			  </form>
		   	  </div>";
        }
?>

<?php
$result8 = mysqli_query($db_connect,"SELECT * FROM vga");	// Az összes táblából kell az adat nekünk
while($row = mysqli_fetch_assoc($result8)){
		echo "<div class='itemcard'>
			  <form method='post' action=''>
			  <input type='hidden' name='barcode' value=".$row['barcode']." />
			  <div class='picture'><img src='".$row['picture']."' /></div>
			  <div class='name'>".$row['name']."</div>
			  <br>
		   	  <div class='pricehuf'>Ára: ".$row['pricehuf']." Ft</div>
			  <br>
			  <button type='submit' class='buy'>Vásárlás</button>
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


<div class="footeradatok">
    <div class="footertabla">
        <div>Navigáció</div>
        <div>Számítógépek</div>
        <div>Laptopok</div>
        <div>Alkatrészek</div>
    </div>
    <div>
        <div>Elérhetőségek</div>
        <div>Akemi</div>
        <div>Bertold</div>
        <div>Dávid</div>
    </div>
    <div>
        <div>Java Játék</div>
        <div>Dokumentáció</div>
        <div>History</div>
        <div>Pina</div>
      </div>
<div>

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