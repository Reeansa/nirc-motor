<?php $this->load->view('main/_partials/head') ?>
<body>
	<div class="app">
		<!-- top bar -->
		<?php $this->load->view('main/_partials/navbar') ?>
		<?php $this->load->view('main/_partials/sidebar') ?>
		<!-- navbar -->
		<!-- end navbar -->
		<!-- end top bar -->
		<div class="page-container">

			<!-- Content Wrapper START -->
			<div class="main-content">
				<div class="page-header">
					<!-- main content -->
					<?php $this->load->view($kontenDinamis) ?>
				</div>
				<!-- Content goes Here -->
			</div>
			<!-- Content Wrapper END -->
		</div>
</body>

<script src="<?= base_url('assets/bootstrap-5.2.3-dist/js/bootstrap.bundle.js') ?>"></script>
<script src="<?= base_url('assets/bootstrap-5.2.3-dist/js/bootstrap.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery-3.6.2.js') ?>"></script>

</html>
