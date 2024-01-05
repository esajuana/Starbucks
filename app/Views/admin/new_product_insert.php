<div class="container">
	<div class="row">
		<div class="column-12 pt-5">
			<h1 style="text-align: center;">Halaman Manajemen Produk Terbaru</h1>
			<br/>
			<br/>
			<br/>
		</div>
		<div class="column-12">
			<h3>Isi form dibawah untuk Tambah Produk :</h3>
			<form action="<?php echo site_url('admin/new-product/insert') ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Nama Produk Terbaru</label>
					<input type="text" class="form-control" name="new_product_name" required>
				</div>
				<div class="form-group">
					<label>Harga Produk Terbaru</label>
					<input type="number" class="form-control" name="new_product_price" required>
				</div>
				<div class="form-group">
					<label>Gambar Produk Terbaru</label>
					<input type="file" class="form-control" name="new_product_image">
				</div>
				<div class="form-group">
					<label>Deskripsi Produk Terbaru</label>
					<textarea class="form-control" name="new_product_description" required="" rows="4"></textarea>
				</div>
				<div class="form-group">
<!--					<label>Status Produk Terbaru</label>-->
<!--					<select name="new_product_status">-->
<!--						<option value="first">First</option>-->
<!--						<option value="second">Second</option>-->
<!--					</select>-->
					<label>Produk Terbaru Status</label>
					<textarea class="form-control" name="new_product_status" required=""></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan Produk</button>
					<a href="<?php echo site_url('admin/new-product') ?>" class="btn btn-warning">Kembali ke Daftar Produk Terbaru</a>
				</div>
			</form>
		</div>
	</div>
</div>
