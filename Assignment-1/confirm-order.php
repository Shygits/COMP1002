ho<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=""UTF-8">
    <title> Order Confirmation for HTMLs Pizza Planet</title>
    <link rel="stylesheet" href="css/styles.css" />
 </head>
  
  <body>
    <header>
      <h1>HTMLs Pizza Planet</h1>
    </header>

    <h2>Your Order has been received!</h2>

    <?php
	$fname = $_GET["name"];
	$size = $_GET["size"];
	$shape = $_GET["shape"];
	$crust = $_GET["crust"];
	$sauce = $_GET["sauce"];
	$toppings = $_GET["toppings"];
	$quantity = $_GET["quantity"];
	$instructions = $_GET["instructions"];

    echo '<ul>';
	echo '<p>Thank you, ' .$fname .' '!</p>';
	echo '<li>Shape: ' . $shape . '</li>';
	echo '<li>Size: ' . $size . '</li>';
	echo '<li>Crust: ' . $crust . '</li>';
	echo '<li>Sauce: ' . $sauce . '</li>';
	echo '<li>Toppings: ' . $toppings . '</li>';
	echo '<li>Quantity: ' . $quantity . '</li>';
	echo '<li>Instructions: ' . $instructions . '</li>';
    echo '</ul>
    
 </body>

  
