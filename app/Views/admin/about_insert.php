<div class="container">
	<div class="row">
		<div class="column-12 pt-5">
			<h1 style="text-align: center;">Halaman Manajemen About</h1>
			<br/>
			<br/>
			<br/>
		</div>
		<div class="column-12">
			<h3>Isi form dibawah untuk Tambah About :</h3>
			<form action="<?php echo site_url('admin/about/insert') ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>About Name</label>
					<textarea class="form-control" name="about_name" required></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan About</button>
					<a href="<?php echo site_url('admin/about') ?>" class="btn btn-warning">Kembali ke Daftar About</a>
				</div>
			</form>
		</div>
	</div>
</div>
