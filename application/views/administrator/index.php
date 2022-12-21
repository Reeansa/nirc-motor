<?php $this->load->view('administrator/_partials/head') ?>
<body>
	<!-- Header -->
	<?php $this->load->view('administrator/_partials/header') ?>
	<!-- End Header -->

	<!-- Sidebar -->
	<?php $this->load->view('administrator/_partials/sidebar') ?>
	<!-- End Sidebar-->

	<main id="main" class="main">

		<div class="pagetitle">
			<h1><?= $sideName ?></h1>
		</div>
		<!-- End Page Title -->
		<?php $this->load->view($kontenDinamis) ?>
	</main>
	<!-- End #main -->

	<!-- ======= Footer ======= -->
	<?php $this->load->view('administrator/_partials/footer') ?>
	<!-- End Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url('assets/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js') ?>"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>
