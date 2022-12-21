<div class="card">
	<div class="card-body">
		<div class="d-flex justify-content-between align-items-center">
			<h5 class="card-title">Default Table</h5>
			<button type="button" class="h-25 btn btn-primary">Tambah Data</button>
		</div>
		<!-- Default Table -->
		<table class="table">

			<thead>
				<tr class="text-center">
					<th scope="col">#</th>
					<th scope="col">Nama</th>
					<th scope="col">Gambar</th>
					<th scope="col">Tanggal</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
			<?php
                $i = 1;
				foreach ($artikel as $artik) : ?>
				<tr class="text-center">
					<th scope="row">1</th>
					<td>Brandon Jacob</td>
					<td>
						<img src="<?= base_url('assets/images/clubs-1.jpg') ?>" height="100" alt="">
					</td>
					<td>2016-05-25</td>
					<td>
						<button type="button" class="btn btn-success mx-2"><i class="bi bi-check-circle"></i></button>
						<button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<!-- End Default Table Example -->
	</div>
</div>
