<div class="container">
	<div class="row">
		<div class="column-12 pt-5">
			<h1 style="text-align: center;">Halaman Manajemen Gallery</h1>
			<br />
			<br />
			<br />
		</div>
		<div class="column-12">
			<div class="text-right">
				<a href="<?php echo site_url('admin/gallery/create') ?>" class="btn btn-success">Tambah Gallery</a>
			</div>
			<br/>
			<table class="table table-bordered">
				<thead>
				<tr>
					<th>No</th>
					<th>Gallery Image</th>
					<th>Gallery Kategori</th>
					<th>Menu</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($gallery_list as $key => $row) { ?>
					<tr>
						<td style="text-align: center;"><?php echo ++$key ?>.</td>
						<td>
							<img style="width: 130px; " src="<?php echo base_url('img/'.$row['gallery_image']) ?>">
						</td>
						<td><?php echo $row['gallery_kategori'] ?></td>
						<td style="text-align: center;">
							<a href="<?php echo site_url('admin/gallery/edit/'.$row['id_gallery']) ?>" class="btn btn-success">Edit</a>
							<a href="<?php echo site_url('admin/gallery/delete/'.$row['id_gallery']) ?>" class="btn btn-danger">Hapus</a>
						</td>
					</tr>
				<?php } ?>

				</tbody>
			</table>
		</div>
	</div>
</div>
