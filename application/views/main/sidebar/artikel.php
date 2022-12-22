<div class="row">
	<?php foreach($artikel as $a): ?>
	<div class="col-md-4">
		<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
			<div class="col p-3 d-flex flex-column position-static">
				<strong class="d-inline-block mb-2 heading-article fs-12"><?= $a['kategori'] ?></strong>
				<h5 class="fs-12" style="text-align: justify;"><?= $a['judul'] ?></h5>
				<div class="mb-1 text-muted fs-10"><?= $a['tanggal'] ?></div>
				<a href="#" class="stretched-link next-click">lanjutkan</a>
			</div>
			<div class="col-auto d-none d-lg-block">
				<img src="<?= base_url('assets/images/artikel/' . $a['images']) ?>" width="150" height="150" alt="">
			</div>
		</div>
	</div>
	<?php endforeach ?>
	<div class="h-100 w-100 text-center">
		<button onclick="myFunction()" class="btn btn-primary w-25">Read more</button>
	</div>
</div>
