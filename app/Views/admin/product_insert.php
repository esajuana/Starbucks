<div class="container">
	<div class="row">
		<div class="column-12 pt-5">
			<h1 style="text-align: center;">Halaman Manajemen Produk</h1>
			<br/>
			<br/>
			<br/>
		</div>
		<div class="column-12">
			<h3>Isi form dibawah untuk Tambah Produk :</h3>
			<form action="<?php echo site_url('admin/product/insert') ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Nama Produk</label>
					<input type="text" class="form-control" name="product_name" required>
				</div>
				<div class="form-group">
					<label>Harga Produk</label>
					<input type="number" class="form-control" name="product_price" required>
				</div>
				<div class="form-group">
					<label>Gambar Produk</label>
					<input type="file" class="form-control" name="product_image">
				</div>
				<div class="form-group">
					<label>Deskripsi Produk</label>
					<textarea class="form-control" name="product_description" required="" rows="4"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan Produk</button>
					<a href="<?php echo site_url('admin/product') ?>" class="btn btn-warning">Kembali ke Daftar produk</a>
				</div>
			</form>
		</div>
	</div>
</div>
