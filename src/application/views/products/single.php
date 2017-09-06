<div class="container mt-4">
	<div class="row">
		<!-- Images -->
		<div class="col-lg-1 d-none d-lg-flex flex-column justify-content-between mh-100">
			<img src="<?php echo base_url(); ?>assets/images/product-small.png" alt="" class="img-fluid img-thumbnail"><img
				src="<?php echo base_url(); ?>assets/images/product-small.png" alt="" class="img-fluid img-thumbnail"><img
				src="<?php echo base_url(); ?>assets/images/product-small.png" alt="" class="img-fluid img-thumbnail"><img
				src="<?php echo base_url(); ?>assets/images/product-small.png" alt="" class="img-fluid img-thumbnail"><img
				src="<?php echo base_url(); ?>assets/images/product-small.png" alt="" class="img-fluid img-thumbnail">
		</div>

		<!-- Big image -->
		<div class="col-12 col-md-6 col-lg-5">
			<img src="<?php echo base_url(); ?>uploads/<?php echo $product['product_slug']; ?>/product-image.png" class="img-fluid" alt="">
		</div>

		<!-- Info -->
		<div class="col-12 col-md-6">
			<h1 class="h4"><?php echo $product['product_title']; ?></h1>
			<div class="h5 text-primary my-4"><?php echo $product['price']; ?> din</div>
			<hr>
			<?php echo form_open('cart/add', array('method'=>'post', 'class'=>'form-inline ml-3 mb-4 add-to-cart')); ?>
				<input type="hidden" name="product-id" value="<?php echo $product['id']; ?>">
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
					<p class="text-muted"><?php echo $product['details']; ?></p>
				</div>
			</div>
		</div>
	</div>
</div>