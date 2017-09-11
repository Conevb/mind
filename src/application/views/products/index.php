<div class="container">
	<div class="row">
		<div class="col-3 d-none d-lg-block">
			<h4 class="mb-4">Kategorije</h4>
			<div id="categories-sidebar" class="test" role="tablist">
				<div class="card">
					<div class="card-header" role="tab" id="led-rasveta-heading">
						<h5 class="mb-0">
							<a class="d-flex justify-content-between" data-toggle="collapse" href="#led-rasveta" aria-expanded="true" aria-controls="led-rasveta">
								LED Rasveta
								<i class="fa fa-chevron-down"></i>
							</a>
						</h5>
					</div>

					<div id="led-rasveta" class="collapse show" role="tabpanel" aria-labelledby="led-rasveta-heading" data-parent="#categories-sidebar">
						<div class="card-body">
							<ul class="nav flex-column">
								<li class="nav-item"><a href="#" class="nav-link">LED Sijalice</a></li>
								<li class="nav-item"><a href="#" class="nav-link">LED Trake</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Rozetne</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="elektromaterijal-heading">
						<h5 class="mb-0">
							<a class="d-flex justify-content-between" data-toggle="collapse" href="#elektromaterijal" aria-expanded="true" aria-controls="led-rasveta">
								Elektromaterijal
								<i class="fa fa-chevron-down"></i>
							</a>
						</h5>
					</div>

					<div id="elektromaterijal" class="collapse show" role="tabpanel" aria-labelledby="elektromaterijal-heading" data-parent="#categories-sidebar">
						<div class="card-body">
							<ul class="nav flex-column">
								<li class="nav-item"><a href="#" class="nav-link">LED Sijalice</a></li>
								<li class="nav-item"><a href="#" class="nav-link">LED Trake</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Rozetne</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-9">
			<div class="row">
				<?php foreach($products as $product): ?>
					<div class="col-12 col-sm-6 col-md-4 py-2">
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