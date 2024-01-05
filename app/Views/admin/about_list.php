<div class="container">
	<div class="row">
		<div class="column-12 pt-5">
			<h1 style="text-align: center;">Halaman Manajemen About</h1>
			<br />
			<br />
			<br />
		</div>
		<div class="column-12">
			<div class="text-right">
				<a href="<?php echo site_url('admin/about/create') ?>" class="btn btn-success">Tambah About</a>
			</div>
			<br/>
			<table class="table table-bordered">
				<thead>
				<tr>
					<th>No</th>
					<th>About Name</th>
					<th style="width: 120px;">Menu</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($about_list as $key => $row) { ?>
							<tr>
								<td style="text-align: center;"><?php echo ++$key ?>.</td>
								<td><?php echo $row['about_name'] ?></td>
								<td style="text-align: center;">
									<a href="<?php echo site_url('admin/about/edit/'.$row['id_about']) ?>" class="btn btn-success">Edit</a>
									<a href="<?php echo site_url('admin/about/delete/'.$row['id_about']) ?>" class="btn btn-danger">Hapus</a>
								</td>
							</tr>
				<?php } ?>

				</tbody>
			</table>
		</div>
	</div>

</div>
