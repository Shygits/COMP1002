<!DOCTYPE html>
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


	echo '<p>Thank you, ' .$fname .' '!</p>';
	foreach ($alert as $item) {
   echo ('<li>'. $item.'</li>
    }
	echo('</ul>');

    
 </body>

  
