<?php include 'header.php' ?>

<a href="index.php" class="btn btn-dark px-4 mb-3">Back</a>

<h1 class="h2 fw-bold">How it works?</h1>
<p>Five steps: Placing the order, Reviewing the order, Making the payment, Baking fresh, and Delivering to the address.</p>
<p>It starts with the customer placing their order using an online 'Order' form, once received i will review and confirming the order. Once the confirmation is done I will intimate you through WhatsApp and once the payment is made, I will starts preparing the fresh order. Finally, I will delivered to your address.</p>

<?php 
$how_it_works = array(
	"place your order" => array(
		"desc" => "Use the 'Order form' to Place your order",
		"width" => 110
	),
	"order review" => array(
		"desc" => "We will review the order as soon as I have received.",
		"width" => 85
	),
	"payment" => array(
		"desc" => "Once your order is confirmed you can make the payment. Order will be proceed only after the full payment is made. <br><br> Payment details will be send through WhatsApp",
		"width" => 65
	),
	"fresh baking" => array(
		"desc" => "As soon as the payment is made I make the order fresh.",
		"width" => 130
	),
	"delivery" => array(
		"desc" => "Order will be delivered to the given address",
		"width" => 150
	)
);
?>

<div class="row justify-content-center text-center mt-5">
	<?php 
	$num = 1;
	foreach ($how_it_works as $how_it_works_key => $how_it_works_array): 
		$img_filename = str_replace(' ', '-', $how_it_works_key);
		?>
		<div class="col-12 col-md-2">
			<img class="img-fluid" src="assets/images/how-it-works/<?php echo $img_filename ?>.png" width="<?php echo $how_it_works_array['width'] ?>" alt="">
			<div class="mt-3 mb-5 mb-md-0">
				<h2 class="h6 text-uppercase fw-bold"><?php echo $num++ . '. ' . $how_it_works_key ?></h2>
				<p class="lh-sm"><?php echo $how_it_works_array['desc'] ?></p>
			</div>
		</div>
	<?php endforeach ?>
</div>

<?php include 'footer.php' ?>