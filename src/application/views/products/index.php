<div class="container">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-9">
			<div class="row">
				<?php foreach($products as $product): ?>
					<div class="col-4 py-2">
						<div class="card"><img src="<?php echo base_url().'uploads/'.$product['product_slug'].'/thumbnails/product-small.png' ?>" alt="" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title h6"><a href="<?php echo base_url().'proizvodi/'.$product['category_slug'].'/'.$product['product_slug']; ?>"><?php echo $product['product_title']; ?></a></h5>
								<p class="text-muted"><?php echo word_limiter($product['details'], 10); ?></p>
								<div class="h5 text-primary"><?php echo $product['price']; ?> din</div>
								<button class="btn btn-primary btn-round"><i class="fa fa-shopping-cart"></i>
								</button>
								<button class="btn btn-primary btn-round ml-2"><i class="fa fa-heart-o"></i>
								</button>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>