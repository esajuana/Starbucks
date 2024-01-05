<div class="container">
	<div class="row">
		<div class="column-12 pt-5">
			<h1 style="text-align: center;">Halaman Manajemen Produk</h1>
			<br />
			<br />
			<br />
		</div>
		<div class="column-12">
			<div class="text-right">
				<a href="<?php echo site_url('admin/product/create') ?>" class="btn btn-success">Tambah Produk</a>
			</div>
			<br/>
			<table class="table table-bordered">
				<thead>
				<tr>
					<th>No</th>
					<th>Gambar Produk</th>
					<th>Nama Produk</th>
					<th style="width: 140px;">Harga Produk</th>
					<th>Deskripsi Produk</th>
					<th style="width: 180px;">Menu</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($product_list as $key => $row) { ?>
							<tr>
								<td style="text-align: center;"><?php echo ++$key ?>.</td>
								<td>
									<img style="width: 200px; " src="<?php echo base_url('img/'.$row['product_image']) ?>">

								</td>
								<td><?php echo $row['product_name'] ?></td>
								<td style="text-align: center;"><?php echo number_format($row['product_price']) ?>$</td>
								<td style="text-align: center;"><?php echo $row['product_description'] ?></td>
								<td style="text-align: center;">
									<a href="<?php echo site_url('admin/product/edit/'.$row['id_product']) ?>" class="btn btn-success">Edit</a>
									<a href="<?php echo site_url('admin/product/delete/'.$row['id_product']) ?>" class="btn btn-danger">Hapus</a>
								</td>
							</tr>
				<?php } ?>

				</tbody>
			</table>
		</div>
	</div>
</div>
