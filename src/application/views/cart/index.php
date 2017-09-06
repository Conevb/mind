<div class="container">
	<table>
		<thead>
			<tr class="row">
				<th class="col-3"></th>
				<th class="col-6">Naziv</th>
				<th class="col-1">Cena</th>
				<th class="col-1">Količina</th>
				<th class="col-1">Ukupno</th>
			</tr>
		</thead>

		<tbody>
		<?php foreach ($this->cart->contents() as $product): ?>
			<tr class="row">
				<td class="col-3"><img src="<?php echo base_url(); ?>uploads/<?php echo $product['slug'] ?>/thumbnails/product-small.png" class="img-fluid"></td>
				<td class="col-6"><?php echo $product['name']; ?></td>
				<td class="col-1"><?php echo $product['price']; ?> din</td>
				<td class="col-1">
					<input type="number" class="form-control" value="<?php echo $product['qty']; ?>">
					<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i></button>
					<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></a>
				</td>
				<td class="col-1">2300 din</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>