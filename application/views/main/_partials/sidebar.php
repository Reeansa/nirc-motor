<!-- side bar -->
<div class="sidebar p-3" style="background-color: #222831;">
	<ul class="text-capitalize p-2">
		<li class="d-flex align-items-center nav-item p-2">
			<i class="fa-solid fa-newspaper" style="color: #ffffff; margin-right: 1rem;"></i>
			<a class="nav-link active" href="<?= site_url('artikel') ?>">artikel</a>
		</li>
		<li class="d-flex align-items-center nav-item p-2">
			<i class="fa-solid fa-calendar-days" style="color: #ffffff; margin-right: 1rem;"></i>
			<a class="nav-link" href="<?= site_url('event') ?>">event</a>
		</li>
		<li class="d-flex align-items-center nav-item p-2">
			<i class="fa-solid fa-image" style="color: #ffffff; margin-right: 1rem;"></i>
			<a class="nav-link" href="<?= site_url('galeri') ?>">galeri foto</a>
		</li>
		<li class="d-flex align-items-center nav-item p-2">
			<i class="fa-solid fa-user-secret" style="color: #ffffff; margin-right: 1rem;"></i>
			<a class="nav-link" href="<?= site_url('klien') ?>">klien kami</a>
		</li>
		<li class="mb-1">
			<button class="btn" data-bs-toggle="collapse" data-bs-target="#login-collapse" aria-expanded="false"> <i class="fa-solid fa-right-to-bracket" style="color: #ffffff; margin-right: 0.3rem;"></i>
				Login
			</button>
			<div class="collapse" id="login-collapse">
				<ul class="btn-toggle-nav fw-normal">
					<li><a href="#" class="li-text" data-bs-toggle="modal" data-bs-target="#modalLogin">Sign in</a></li>
					<li><a href="#" class="li-text">Sign up</a></li>
				</ul>
			</div>
		</li>
	</ul>
</div>
<?php $this->load->view('main/login'); ?>
<!-- end side bar -->
