<?php
session_start();
$status="";		// A státusz az egy text box ami kiír valamit ha történik valami.

if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["barcode"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Eltávolítottad a kosaradból!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['barcode'] === $_POST["barcode"]){
        $value['piece'] = $_POST["piece"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>

<html>
<head>
<title> Kosár </title>
<link rel="stylesheet" href="">
</head>
<body>
<div style="width:700px; margin:50 auto;">

<h2>Kosarad: </h2>   

<?php		// Mutat egy számot a kosár ikonnál, hogy hány darab termék van eddig benne
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>

<div class="cart_div">
<a href="cart.php">
	<!-- Formázzuk meg a kosár számlálójának a szövegét -->
<img src="cart-icon.png" /> Termékek: 
<span><?php echo $cart_count; ?></span></a>
</div>

<?php
}
?>



<div class="cart">
<?php		// Teljes ára az összes terméknek
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>


<table class="table">
<tbody>
<tr>
<td></td>
<td>Termék neve:</td>
<td>Darab:</td>
<td>Ár / db:</td>
<td>Összesen:</td>
</tr>

<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["picture"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='barcode' value="<?php echo $product["barcode"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='barcode' value="<?php echo $product["barcode"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='piece' class='piece' onchange="this.form.submit()">
<option <?php if($product["piece"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["piece"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["piece"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["piece"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["piece"]==5) echo "selected";?> value="5">5</option>
</select>
</form>



</td>
<td><?php echo $product["pricehuf"]; ?> Ft</td>
<td><?php echo $product["piece"]*$product["pricehuf"]; ?> Ft</td>
</tr>

<?php
$total_price += ($product["piece"]*$product["pricehuf"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>Összesen: <?php echo $total_price; ?> Ft</strong>
</td>
</tr>
</tbody>
</table>		
  <?php
}else{
	echo "<h3>Üres a kosarad!</h3>";
	}
?>
</div>

<div style="clear:both;"></div>
<tr>

<td>
<button> <a href="vasarol.php">  Vásárol</a></button>
</td>

</tr>
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>



<a href="index.php">Vissza az indexre!</a>
<br><br>
<a href="PHP/ssd.php">Termékek</a>
<br>



<br /><br />
</div>
</body>
</html>