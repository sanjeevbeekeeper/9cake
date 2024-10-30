<?php include 'header.php' ?>

<div class="row justify-content-center mt-3">
	<div class="col-12 col-lg-9 col-xl-8">

		<div class="row">

			<div class="col-12 d-none d-sm-inline-block col-sm-4 col-md-5 text-end">
				<img class="img-fluid" src="assets/images/handmade.png" alt="Handmade with Love logo">
				<div class="mt-3 d-none d-md-block">
					<a href="https://docs.google.com/forms/d/e/1FAIpQLSc2W7va_7H7URs1r2g5CJqiLRqetM3Gc3Za6Zp6TguS-N-7yA/viewform" class="me-2 btn btn-lg btn-warning rounded-pill px-4" target="_blank">Order Form</a>
					<a href="how-it-works.php" class="me-2 mt-md-3 mt-xxl-0 btn btn-outline-dark rounded-pill px-4 border-2 fw-bold">How it works</a>
					<div class="d-flex justify-content-end mt-3">
						<div class="me-3 lh-base">Free Home Delivery within <br> Agrini and Vasudhara</div>
						<div><img class="img-fluid" src="assets/images/delivery.png" width="70" alt="Delivery icon"></div>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-8 col-md-7 border-start border-2 border-dark border-none pb-4">
				<img class="d-block d-sm-none img-fluid" src="assets/images/handmade.png" alt="Handmade with Love logo">

				<h2 class="h4 fw-bold text-muted ms-3 text-uppercase mt-3 mt-sm-0">Available</h2>
				<?php 
				$items = array(
					"Artisan" => "Walnut Banana Cake",
					"Super Healthy" => "Ragi and Whole Wheat Cake",
					"Homemade" => "Peanut Butter"
				)
				?>
				<?php foreach ($items as $item_key => $item_value): ?>
					<div class="my-3 ms-3">
						<div class="h5 mb-0 fw-normal text-uppercase"><?php echo $item_key ?></div>
						<h2 class="font-lobster h1"><?php echo $item_value ?></h2>
					</div>
				<?php endforeach ?>
				<div class="mt-5 d-block d-md-none">
					<a href="" class="me-2 btn btn-lg btn-warning rounded-pill px-4">Order Form</a>
					<a href="how-it-works.php" class="me-2 mt-md-3 mt-xxl-0 btn btn-outline-dark rounded-pill px-4 border-2 fw-bold">How it works</a>
					<div class="d-flex mt-4">
						<div><img class="img-fluid mt-2" src="assets/images/delivery.png" width="40" alt="Delivery icon"></div>
						<div class="ms-3 lh-base">Free Home Delivery within <br> Agrini and Vasudhara</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<?php include 'footer.php' ?>