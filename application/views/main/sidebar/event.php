<div class="container">
	<div class="row">
		<h1 class="text-center">events</h1>
		<?php foreach ($events as $e) : ?>
			<div class="bg-white rounded shadow mt-5">
				<div class="d-flex">
					<div class="w-25" style="background: url('<?= base_url('assets/images/events/'.$e['images']) ?>'); background-size: cover;background-position: center;">
					</div>
					<div class="d-inline-block m-3">
						<h6><strong><?= $e['kategori'] ?></strong></h6>
						<a class="text-decoration-none" href="#">
							<h3 class="text-dark"><?= $e['judul'] ?></h3>
						</a>
						<p style="text-align: justify;"><?= $e['isievents'] ?></p>
						<p class="text-decoration-underline" style="color: #2D4263;"><i class="fa-solid fa-clock m-2"></i><?= date('h-i-s', strtotime($e['tgl_events'])) ?></p>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>
