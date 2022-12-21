<!-- top bar -->
<header class="position-fixed d-grid w-100" style="background-color: #191919; z-index: 1030;">
	<div class="d-flex text-center w-100">
		<div class="d-flex justify-content-center w-25">
			<a href="#"><img src="<?= base_url('assets/images/logo/nirc-white.png') ?>" width="100" alt=""></a>
		</div>
		<div class="text-center align-self-center text-white w-100">
			<h1>Night Raid Clubs</h1>
		</div>
	</div>
	<!-- navbar -->
	<nav class="d-flex flex-column" style="background-color: #2D4263;">
		<ul class="nav justify-content-around text-center">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="<?= site_url('/') ?>">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= site_url('profil') ?>">profile</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= site_url('visidanmisi') ?>">visi dan misi</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= site_url('produk') ?>">produk kami</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= site_url('kontak') ?>">kontak kami</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= site_url('about') ?>">about us</a>
			</li>
		</ul>
	</nav>
	<!-- end navbar -->
</header>
<!-- end top bar -->
