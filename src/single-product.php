<?php require_once 'templates/header.php'; ?>
<div class="container mt-4">
	<div class="row">
		<!-- Images -->
		<div class="col-lg-1 d-none d-lg-flex flex-column justify-content-between mh-100">
			<img src="images/product-small.png" alt="" class="img-fluid img-thumbnail"><img
				src="images/product-small.png" alt="" class="img-fluid img-thumbnail"><img
				src="images/product-small.png" alt="" class="img-fluid img-thumbnail"><img
				src="images/product-small.png" alt="" class="img-fluid img-thumbnail"><img
				src="images/product-small.png" alt="" class="img-fluid img-thumbnail">
		</div>

		<!-- Big image -->
		<div class="col-12 col-md-6 col-lg-5">
			<img src="images/product-image.png" class="img-fluid" alt="">
		</div>

		<!-- Info -->
		<div class="col-12 col-md-6">
			<h1 class="h4">George Foreman GRP4800R 4-in-1 Evolve Grill</h1>
			<div class="h5 text-primary my-4">250,00 din</div>
			<hr>
			<form class="form-inline ml-3 mb-4" method="post">
				<input type="hidden" name="product-title" value="George Foreman GRP4800R 4-in-1 Evolve Grill">
				<input type="hidden" name="product-price" value="250,00">
				<div class="form-group mr-4">
					<label for="product-qty" class="text-muted">Količina:</label>
					<input type="number" class="form-control ml-2" id="product-qty" name="product-qty" value="1" min="1">
				</div>
				<button type="submit" class="btn btn-primary">Dodaj u korpu</button>
			</form>
			<a href="#" class="text-primary"><i class="fa fa-heart-o"></i> Dodaj u listu želja</a>
		</div>

		<hr>
	</div>

	<!-- Details -->
	<div class="row product-details mt-4">
		<div class="col-12 col-md-3">
			<div class="nav flex-column nav-pills" id="productTab" role="tablist">
				<a class="nav-link active" id="detailsTab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="details" aria-expanded="true">Detalji</a>
			</div>
		</div>
		<div class="col">
			<div class="tab-content py-3" id="productTabContent">
				<div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="detailsTab">
					<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquam animi asperiores aspernatur assumenda, deleniti eaque enim eveniet, fuga maxime molestias necessitatibus nisi rerum sequi ut, velit veritatis! Accusamus, cumque.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once 'templates/footer.php'; ?>
