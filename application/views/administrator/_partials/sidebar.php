<aside id="sidebar" class="sidebar">

	<ul class="sidebar-nav" id="sidebar-nav">

		<li class="nav-item">
			<a class="nav-link " href="<?= site_url('administrator/dashboard') ?>">
				<i class="bi bi-grid-fill"></i>
				<span>Dashboard</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" data-bs-target="#artikel" data-bs-toggle="collapse" href="#" aria-expanded="false">
				<i class="ri-article-fill"></i><span>Artikel</span><i class="bi bi-chevron-down ms-auto"></i>
			</a>
			<ul id="artikel" class="nav-content collapse" data-bs-parent="#sidebar-nav" style="">
				<li>
					<a href="<?= site_url('administrator/artikel') ?>">
						<i class="bi bi-circle"></i><span>Table list</span>
					</a>
				</li>
			</ul>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" data-bs-target="#events" data-bs-toggle="collapse" href="#" aria-expanded="false">
				<i class="bi bi-calendar2-event-fill"></i><span>Events</span><i class="bi bi-chevron-down ms-auto"></i>
			</a>
			<ul id="events" class="nav-content collapse" data-bs-parent="#sidebar-nav" style="">
				<li>
					<a href="<?= site_url('administrator/events') ?>">
						<i class="bi bi-circle"></i><span>Table list</span>
					</a>
				</li>
			</ul>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" data-bs-target="#galeri" data-bs-toggle="collapse" href="#" aria-expanded="false">
				<i class="ri-gallery-fill"></i><span>Galeri Foto</span><i class="bi bi-chevron-down ms-auto"></i>
			</a>
			<ul id="galeri" class="nav-content collapse" data-bs-parent="#sidebar-nav" style="">
				<li>
					<a href="<?= site_url('administrator/galeri') ?>">
						<i class="bi bi-circle"></i><span>Table list</span>
					</a>
				</li>
			</ul>
		</li>
		<!-- End Dashboard Nav -->
		<!-- heading side -->
		<li class="nav-heading">Pages</li>
		<!-- end heading side -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="users-profile.html">
				<i class="bi bi-person"></i>
				<span>Profile</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" href="users-profile.html">
				<i class="bi bi-box-arrow-right"></i>
				<span>Sign Out</span>
			</a>
		</li>
	</ul>

</aside>
