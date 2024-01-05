<div class="container">
	<div class="row">
		<div class="column-12 pt-5">
			<h1 style="text-align: center;">Halaman Manajemen Gallery</h1>
			<br/>
			<br/>
			<br/>
		</div>
		<div class="column-12">
			<h3>Isi form dibawah untuk Edit Gallery :</h3>
			<form action="<?php echo site_url('admin/gallery/update/'.$gallery_row['id_gallery']) ?>"
				  method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Kategori Gallery</label>
					<input type="text" class="form-control" name="gallery_kategori" value="<?php echo $gallery_row['gallery_kategori'] ?>">
				</div>
				<div class="form-group">
					<label>Gambar Gallery</label>
					<br />
					<img src="<?php echo base_url('img/'.$gallery_row['gallery_image']) ?>" width="150">
					<br />
					<br />
					<input type="file" class="form-control" name="gallery_image" value="">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Perbarui Gallery</button>
					<a href="<?php echo site_url('admin/gallery') ?>" class="btn btn-warning">Kembali ke Daftar Gallery</a>
				</div>
			</form>
		</div>
	</div>
</div>
