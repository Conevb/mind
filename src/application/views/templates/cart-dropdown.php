<a href="#" class="btn btn-link dropdown-toggle" role="button" id="cartDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<i class="fa fa-shopping-cart text-primary mr-2"></i>Korpa (<?php echo $this->cart->total_items(); ?>)
</a>

<div class="dropdown-menu p-4" style="width:300px; right:0;left:unset;" aria-labelledby="#cartDropdown">

	<?php foreach($this->cart->contents() as $product): ?>
		<div class="row">
			<div class="col-5">
				<img class="img-fluid" src="<?php echo base_url()."uploads/".$product['slug']."/thumbnails/product-small.png"; ?>">
			</div>
			<div class="col-7">
				<h5 class="h6 font-weight-normal">
					<a href="#"><?php echo $product['name']; ?></a></h5>
				<span class="text-muted"><?php echo $product['qty']." x ".$product['price']; ?></span>
			</div>
		</div>
	<?php endforeach; ?>
	<div class="dropdown-divider"></div>
	<div class="d-flex justify-content-between">
		<span>Ukupno:</span>
		<span><?php echo $this->cart->total(); ?></span>
	</div>
	<div class="dropdown-divider"></div>
	<a href="<?php echo base_url(); ?>korpa" class="btn btn-primary">Prikazi korpu</a>

</div>
