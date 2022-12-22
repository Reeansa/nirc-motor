<div class="card">
	<div class="card-body">
		<div class="d-flex justify-content-between align-items-center">
			<h5 class="card-title">Data Artikel</h5>
			<a href="<?= site_url('administrator/artikel/add') ?>"><button type="button" class="h-25 btn btn-primary">Tambah Data</button></a>
		</div>
		<!-- Default Table -->
		<table class="table">
			<?php if (empty($artikel)) : ?>
				<div class="alert alert-danger" role="alert">
					data mahasiswa tidak ditemukan.
				</div>
			<?php endif; ?>
			<thead>
				<tr class="text-center">
					<th scope="col">#</th>
					<th scope="col">Nama</th>
					<th scope="col">gambar</th>
					<th scope="col">Judul</th>
					<th scope="col">Kategori</th>
					<th scope="col">Tanggal Buat</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
                $i = 1;
				foreach ($artikel as $artik) : ?>
					<tr class="text-center">
						<th scope="row"><?= $i++ ?></th>
						<td><?= $artik['nama']; ?></td>
						<td><img src="<?= base_url('assets/images/artikel/').$artik['images'] ?>" height="50" width="50" alt=""> </td>
						<td><?= $artik['judul']; ?></td>
						<td><?= $artik['kategori']; ?></td>
						<td><?= $artik['tanggal']; ?></td>
						<td class="d-flex justify-content-center">
							<a href="<?= site_url('administrator/artikel/update/').$artik['idartikel']?>">
								<button type="button" class="btn btn-success mx-2"><i class="bi bi-check-circle"></i></button>
							</a>
							<a href="<?= site_url('administrator/artikel/delete/').$artik['idartikel']?>">
								<button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button>
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<!-- End Default Table Example -->
	</div>
</div>
