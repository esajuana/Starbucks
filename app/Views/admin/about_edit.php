<div class="container">
	<div class="row">
		<div class="column-12 pt-5">
			<h1 style="text-align: center;">Halaman Manajemen Values</h1>
			<br/>
			<br/>
			<br/>
		</div>
		<div class="column-12">
			<h3>Isi form dibawah untuk Edit Values :</h3>
			<form action="<?php echo site_url('admin/about/update/'.$about_row['id_about']) ?>"
				  method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>About Name</label>
					<textarea class="form-control" name="about_name" required><?php echo $about_row['about_name'] ?></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Perbarui Values</button>
					<a href="<?php echo site_url('admin/about') ?>" class="btn btn-warning">Kembali ke Daftar About</a>
				</div>
			</form>
		</div>
	</div>
</div>
