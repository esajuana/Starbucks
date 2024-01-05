<div class="container">
	<div class="row">
		<div class="column-12 pt-5">
			<h1 style="text-align: center;">Halaman Manajemen Produk Terbaru</h1>
			<br/>
			<br/>
			<br/>
		</div>
		<div class="column-12">
			<h3>Isi form dibawah untuk Edit Produk Terbaru :</h3>
			<form action="<?php echo site_url('admin/new-product/update/'.$new_product_row['id_new_product']) ?>"
				  method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Nama Produk Terbaru</label>
					<input type="text" class="form-control" name="new_product_name" value="<?php echo $new_product_row['new_product_name'] ?>" required>
				</div>
				<div class="form-group">
					<label>Harga Produk Terbaru</label>
					<input type="number" class="form-control" name="new_product_price" value="<?php echo $new_product_row['new_product_price'] ?>" required>
				</div>
				<div class="form-group">
					<label>Gambar Produk Terbaru</label>
					<br />
					<img src="<?php echo base_url('img/'.$new_product_row['new_product_image']) ?>" width="150">
					<br />
					<br />
					<input type="file" class="form-control" name="new_product_image" value="">
				</div>
				<div class="form-group">
					<label>Deskripsi Produk Terbaru</label>
					<textarea class="form-control" name="new_product_description" required=""><?php echo $new_product_row['new_product_description'] ?></textarea>
				</div>
				<div class="form-group">
					<label>Status Produk Terbaru</label>
					<textarea class="form-control" name="new_product_status" required=""><?php echo $new_product_row['new_product_status'] ?></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Perbarui Produk</button>
					<a href="<?php echo site_url('admin/new-product') ?>" class="btn btn-warning">Kembali ke Daftar produk</a>
				</div>
			</form>
		</div>
	</div>
</div>
