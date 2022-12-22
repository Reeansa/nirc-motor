<div class="card">
	<div class="card-body">
		<div class="d-flex justify-content-between align-items-center">
			<h5 class="card-title">Data Events</h5>
			<a href="<?= site_url('administrator/events/add') ?>"><button type="button" class="h-25 btn btn-primary">Tambah Data</button></a>
		</div>
		<!-- Default Table -->
		<table class="table">
			<?php if (empty($events)) : ?>
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
					<th scope="col">Tanggal Events</th>
					<th scope="col">Tanggal Buat</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 1;
				foreach ($events as $e) : ?>
					<tr class="text-center">
						<th scope="row"><?= $i++ ?></th>
						<td><?= $e['nama']; ?></td>
						<td><img src="<?= base_url('assets/images/events/') . $e['images'] ?>" height="50" width="50" alt=""> </td>
						<td><?= $e['judul']; ?></td>
						<td><?= $e['kategori']; ?></td>
						<td><?= $e['tgl_events'] ?></td>
						<td><?= $e['tanggal']; ?></td>
						<td class="d-flex justify-content-center">
							<a href="<?= site_url('administrator/events/update/') . $e['idevents'] ?>">
								<button type="button" class="btn btn-success mx-2"><i class="bi bi-check-circle"></i></button>
							</a>
							<a href="<?= site_url('administrator/events/delete/') . $e['idevents'] ?>">
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
