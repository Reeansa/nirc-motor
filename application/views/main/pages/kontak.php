<div class="container p-4">
	<div class="row">
		<div class="col-md-6">
			<div class="bg-white shadow rounded p-4 h-100">
				<h1>JAKARTA</h1>
				<p>Monas, jakarta selatan, 12345</p>
				<button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Send Message</button>
			</div>
		</div>
		<div class="col-md-6">
			<div class="bg-white shadow rounded p-4">
				<h1>info kontak</h1>
				<p><i class="fa-solid fa-phone mx-2"></i>(+62) 123-456-789</p>
				<p><i class="fa-solid fa-fax mx-2"></i>123-456</p>
				<p><i class="fa-solid fa-envelope mx-2"></i>nirc@nirc.co.id</p>
			</div>
		</div>
	</div>
</div>

<!-- Modal 1 -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form class="p-5">
				<!-- Name input -->
				<div class="form-outline mb-4">
					<input type="text" id="form4Example1" class="form-control" />
					<label class="form-label" for="form4Example1">Name</label>
				</div>

				<!-- Email input -->
				<div class="form-outline mb-4">
					<input type="email" id="form4Example2" class="form-control" />
					<label class="form-label" for="form4Example2">Email address</label>
				</div>

				<!-- Message input -->
				<div class="form-outline mb-4">
					<textarea class="form-control" id="form4Example3" rows="4"></textarea>
					<label class="form-label" for="form4Example3">Message</label>
				</div>

				<!-- Submit button -->
				<button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
			</form>
			<div class="text-center py-3 bg-light border-top">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
					Close
				</button>
			</div>
		</div>
	</div>
</div>
