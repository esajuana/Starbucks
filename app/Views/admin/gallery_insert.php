<div class="container">
	<div class="row">
		<div class="column-12 pt-5">
			<h1 style="text-align: center;">Halaman Manajemen Gallery</h1>
			<br/>
			<br/>
			<br/>
		</div>
		<div class="column-12">
			<h3>Isi form dibawah untuk Tambah Gallery :</h3>
			<form action="<?php echo site_url('admin/gallery/insert') ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Kategori Gallery</label>
					<input type="text" class="form-control" name="gallery_kategori">
				</div>
				<div class="form-group">
					<label>Gambar Gallery</label>
					<input type="file" class="form-control" name="gallery_image">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan Produk</button>
					<a href="<?php echo site_url('admin/gallery') ?>" class="btn btn-warning">Kembali ke Daftar produk</a>
				</div>
			</form>
		</div>
	</div>
</div>
