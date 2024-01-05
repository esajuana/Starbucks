<div class="container">
	<div class="row">
		<div class="column-12 pt-5">
			<h1 style="text-align: center;">Halaman Manajemen Produk Terbaru</h1>
			<br />
			<br />
			<br />
		</div>
		<div class="column-12">
			<div class="text-right">
				<a href="<?php echo site_url('admin/new-product/create') ?>" class="btn btn-success">Tambah Produk Terbaru</a>
			</div>
			<br/>
			<table class="table table-bordered">
				<thead>
				<tr>
					<th>No</th>
					<th>Gambar Produk Terbaru</th>
					<th>Nama Produk Terbaru</th>
					<th>Harga Produk</th>
					<th>Deskripsi Produk Terbaru</th>
					<th>Status</th>
					<th>Menu</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($new_product_list as $key => $row) { ?>
							<tr>
								<td style="text-align: center;"><?php echo ++$key ?>.</td>
								<td>
									<img style="width: 150px; " src="<?php echo base_url('img/'.$row['new_product_image']) ?>">
								</td>
								<td><?php echo $row['new_product_name'] ?></td>
								<td style="text-align: center;"><?php echo number_format($row['new_product_price']) ?>$</td>
								<td><?php echo $row['new_product_description'] ?></td>
								<td><?php echo $row['new_product_status'] ?></td>
								<td style="text-align: center;">
									<a href="<?php echo site_url('admin/new-product/edit/'.$row['id_new_product']) ?>" class="btn btn-success">Edit</a>
									<a href="<?php echo site_url('admin/new-product/delete/'.$row['id_new_product']) ?>" class="btn btn-danger">Hapus</a>
								</td>
							</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
