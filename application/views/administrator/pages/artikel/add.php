<div class="card">
	<div class="card-body">
		<!-- Vertical Form -->
		<form class="row g-3 p-3 mt-5" method="POST">
			<div class="col-12">
				<label for="inputNama" class="form-label">judul artikel</label>
				<input type="text" name="judul" id="judul" class="form-control" placeholder="judul artikel">
				<small class="form-text text-danger"><?= form_error('judul'); ?></small>
			</div>
			<div class="col-12">
				<label for="inputKategori" class="form-label">isi artikel</label>
				<input type="text" name="isiartikel" id="isiartikel" class="form-control" placeholder="isi artikel">
				<small class="form-text text-danger"><?= form_error('judul'); ?></small>
			</div>
			<div class="col-12">
				<label for="inputKategori" class="form-label">kategori</label>
				<input type="text" name="kategori" id="kategori" class="form-control" placeholder="kategori artikel">
				<small class="form-text text-danger"><?= form_error('kategori'); ?></small>
			</div>
			<div class="text-center">
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				<button type="reset" class="btn btn-secondary">Reset</button>
			</div>
		</form>
		<!-- Vertical Form -->

	</div>
</div>
