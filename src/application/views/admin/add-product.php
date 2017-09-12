<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Dodaj proizvod</h1>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
			<?php echo form_open('admin/proizvodi/dodaj'); ?>
				<div class="form-group">
					<label for="">Naziv:</label>
					<input type="text" name="product-title" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Link:</label>
					<input type="text" name="product-slug" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Kategorija:</label>
					<select name="product-category" class="form-control">
					<?php foreach($categories as $category): ?>
						<option value="<?php echo $category['id']; ?>"><?php echo $category['category_title']; ?></option>
					<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Cena:</label>
					<input type="number" name="product-price" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Detalji:</label>
					<textarea name="product-details" class="form-control" rows="10"></textarea>
				</div>

				<button type="submit" class="btn btn-primary btn-block">Dodaj</button>
			<?php echo form_close(); ?>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

