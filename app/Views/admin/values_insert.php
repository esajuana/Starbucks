<div class="container">
	<div class="row">
		<div class="column-12 pt-5">
			<h1 style="text-align: center;">Halaman Manajemen Values</h1>
			<br/>
			<br/>
			<br/>
		</div>
		<div class="column-12">
			<h3>Isi form dibawah untuk Tambah Values :</h3>
			<form action="<?php echo site_url('admin/values/insert') ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Values Name</label>
					<textarea class="form-control" name="values_name" required></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan Values</button>
					<a href="<?php echo site_url('admin/values') ?>" class="btn btn-warning">Kembali ke Daftar Values</a>
				</div>
			</form>
		</div>
	</div>
</div>
