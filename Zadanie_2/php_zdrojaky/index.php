<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>php funsies</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="container">

	<div class="page-header">
		<h1 class="text-muted">fun times php</h1>
	</div>

	<?php

		// ulozime hodnoty do premennych
		$item_count = 5;
		$item_price = 350;
		echo $item_count;
		echo '<br>';
		echo $item_price;
		echo '<br>';
		echo '=';
		echo '<br>';
		// vynasobime ich a vysledok ulozime do premennej $sum
		$sum = $item_count * $item_price;

		// premennu $sum vypiseme na stranku
		// cize na stranke sa objavi cislo
		echo $sum;
		echo '<br>';
		echo '<br>';

		$cislo = 120;
		$cislo1 = 10;
		echo $cislo.'€'.'<br>'.$cislo1.'€';
		echo '<br>';
		$suma = $cislo + $cislo1;
		$suma = number_format($suma, 2, '.', '');

		echo $suma.'€';
	?>

</body>
</html>