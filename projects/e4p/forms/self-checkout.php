<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:image" content="[IMAGE URL]">
	<meta name="description" content="What's your total?">
	<title></title>

	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<header>
		<section class='inner-column'>
			
		</section>
	</header>

	<main>
		<heading>
			<h1 class="loud-voice">Calculate Your Total Purchase</h1>
		</heading>


		<inner-column>
			<?php 
			//prompt for the prices and quatities of 3 items
				$quantity = 200; //number provided by user
				$price = 105; //number provided by user

				$quantity2 = 1; 
				$price2 = 10;

				$quantity3 = 1; 
				$price3 = 10;
				
				$taxRate = .1025; //tax rate 10.25% = .1025
				$total = "";

				$subTotal = "";
				$grandTotal = "";
				
				$valueError = "";
				$valueError2 = "";
				$valueError3 = "";

				$priceValueError = "";
				$priceValueError2 = "";
				$priceValueError3 = "";
			//calculate the subtotal of the items

			//calculate the tax with tax rate of 10.25
			
			//get the quantity and price posted by the user

			if ( isset($_POST['submitted']) ) {	

				if ( isset($_POST['quantity']) ) {
					$quantity = $_POST['quantity'];
					
					if ( empty($quantity) ) {
						$quantity = 0;
					}
					
					if ($quantity > 0 ) {
						$hasQuantity = true;
					} else {
						$valueError = "If you don't buy anything, you don't owe anything. Enter a quantity!";
					}
				}

				// if ( isset($_POST['price']) ) {
				// 	$price = $_POST['price'];

				// 	if ($price > 0) {
				// 		$hasPrice = true;
				// 	} else {
				// 		$priceValueError = "If it doesn't have a price, then it's free!";
				// 	}
					
				// }

				// if ( isset($_POST['quantity2']) ) {
				// 	$quantity2 = $_POST['quantity2'];
					
				// 	if ($quantity2 > 0 ) {
				// 		$hasQuantity2 = true;
				// 	} else {
				// 		$valueError2 = "If you don't buy anything, you don't owe anything. Enter a quantity!";
				// 	}
				// }

				// if ( isset($_POST['price2']) ) {
				// 	$price2 = $_POST['price2'];

				// 	if ($price2 > 0) {
				// 		$hasPrice2 = true;
				// 	} else {
				// 		$priceValueError2 = "If it doesn't have a price, then it's free!";
				// 	}					
				// }

				// if ( isset($_POST['quantity3']) ) {
				// 	$quantity3 = $_POST['quantity3'];
					
				// 	if ($quantity3 > 0 ) {
				// 		$hasquantity3 = true;
				// 	} else {
				// 		$valueError3 = "If you don't buy anything, you don't owe anything. Enter a quantity!";
				// 	}
				// }

				// if ( isset($_POST['price3']) ) {
				// 	$price3 = $_POST['price3'];

				// 	if ($price3 > 0) {
				// 		$hasprice3 = true;
				// 	} else {
				// 		$priceValueError3 = "If it doesn't have a price, then it's free!";
				// 	}
					
				// }
				
				// $subTotal = ($quantity * $price) + ($quantity2 * $price2) + ($quantity3 * $price3);

				// $formattedSubTotal = number_format($subTotal, 2);

				// $formatted = $taxRate * 100;

				// $taxTotal = $tax * $formattedSubTotal;

				// $formattedTaxTotal = number_format($taxTotal, 2);

				// $grandTotal = ($subTotal) * $tax + ($subTotal);

				// $formattedGrandTotal = number_format(round($grandTotal, 2), 2, '.', ',');


				//subtotal (add all quantities)
				$subTotal = ($quantity * $price) + ($quantity2 * $price2) + ($quantity3 * $price3);

				//tax (subtotal * rate)
				$tax = $subTotal * $taxRate;

				//total (subtotal + tax)
				$total = $subTotal + $tax;

				//formatted tax rate
				$formattedTaxRate = number_format($tax, 2);

				//formatted subtotal
				$formattedSubTotal = number_format($subTotal, 2);

				//formatted tax
				$formattedTax = number_format($taxRate);

				//formatted total
				$formattedTotal = number_format($total, 2);
			}	

			?>
			
			 <form method="POST">
			 	<div class="item one">
				 	<quantity>	
					 	<p class="normal-voice">Quantity of item 1:</p>
						<input 
							type="number" 
							name="quantity" 
							value="<?=$quantity?>"
							min="0"
							placeholder="0"
							label="write your number"
							>

						<?php if($valueError) {?>
						<error>
						<p class="error normal-voice"><?=$valueError?></p>
						</error>
						<?php } ?>	
					</quantity>		

					<price>
						<p class="normal-voice">Price of item 1:</p>	
						<input 
							type="number" 
							name="price" 
							value="<?=$price?>"
							step= '0.01'
							min='0'
							placeholder="0.00">

						<?php if($priceValueError) {?>
						<error>
						<p class="error normal-voice"><?=$priceValueError?></p>
						</error>
						<?php } ?>	

					</price>


				</div>
				
				<div class="item two">
				 	<quantity>	
					 	<p class="normal-voice">Quantity of item 2:</p>
						<input 
							type="number" 
							name="quantity2" 
							value="<?=$quantity2?>"
							min="0"
							placeholder="0"
							label="write your number">

						<?php if($valueError2) {?>
						<error>
						<p class="error normal-voice"><?=$valueError2?></p>
						</error>
						<?php } ?>	
					</quantity>		

					<price>
						<p class="normal-voice">Price of item 2:</p>	
						<input 
							type="number" 
							name="price2" 
							value="<?=$price2?>"
							step= '0.01'
							min='0'
							placeholder="0.00">

						<?php if($priceValueError2) {?>
						<error>
						<p class="error normal-voice"><?=$priceValueError2?></p>
						</error>
						<?php } ?>	

					</price>
				</div>

				<div class="item three">
				 	<quantity>	
					 	<p class="normal-voice">Quantity of item 3:</p>
						<input 
							type="number" 
							name="quantity3" 
							value="<?=$quantity3?>"
							min="0"
							placeholder="0"
							label="write your number">

						<?php if($valueError3) {?>
						<error>
						<p class="error normal-voice"><?=$valueError3?></p>
						</error>
						<?php } ?>	
					</quantity>		

					<price>
						<p class="normal-voice">Price of item 3:</p>	
						<input 
							type="number" 
							name="price3" 
							value="<?=$price3?>"
							step= '0.01'
							min='0'
							placeholder="0.00">

						<?php if($priceValueError3) {?>
						<error>
						<p class="error normal-voice"><?=$priceValueError3?></p>
						</error>
						<?php } ?>	

					</price>
				</div>
				
				<div class="return-values">
					<tax>
						<p class="normal-voice">The Washington State sales tax rate is <?=$formattedTaxRate?>						
						</p>
					</tax>	

					<sub-total>
						<?php if($subTotal){ ?>
							<p class="normal-voice">Your Sub-total is: $<?=$formattedSubTotal?></p>
						<?php } ?>
					</sub-total>

					<tax-total>
						<?php if ($formattedTax) { ?>
							<p class="normal-voice">Tax total: $<?=$formattedTax?></p>
						<?php } ?>	
					</tax-total>

					<grand-total>
						<?php if($formattedTotal > 0){ ?>
							<p class="normal-voice">Your grand total is: $<?=$formattedTotal?></p>
						<?php } ?>

					</grand-total>
				</div>
				<div class="instructions">

					<button type="submit" name="submitted">Submit</button>
					
	
				</div>
			</form>

			<?php if ( isset($_POST['submitted']) ) { ?>
			<output>
				<total>
					<p> Item 1 quantity entered: <?=$quantity?></p> 
					<p> Item 1 price: $<?=$price?>. </p>
					<p> Item 1 sub-total: <?php echo ($quantity * $price) ?></p>
				</total>				

				<total>		
					<p> Item 2 quantity entered: <?=$quantity2?></p> 
					<p> Item 2 price: $<?=$price2?>. </p>
					<p> Item 2 sub-total: <?php echo ($quantity2 * $price2) ?></p>
				</total>	

				<total>
					<p> Item 3 quantity entered: <?=$quantity3?></p> 
					<p> Item 3 price: $<?=$price3?>. </p>
					<p> Item 3 sub-total: <?php echo ($quantity3 * $price3) ?></p>
				</total>	
				<total>
					<p>Tax rate: <?=$tax * 100?></p>
				</total>
				<total>
					<p> Grand Total: <?=$formattedGrandTotal?></p>
				</total>	

			</output>
			<?php } ?>
		</inner-column>

	</main>

	<footer>
		<section class="inner-column">
			
		</section>
	</footer>
	
</body>
</html>