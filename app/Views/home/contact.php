<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-lg-9">
            <h1>Hubungi Kami</h1>
            <div class="row">
							<div class="col-lg-9">
								<form action="">
									<div class="form-floating mb-3">
										<input type="text" class="form-control" id="floatingText" placeholder="Nama">
										<label for="floatingText">Nama</label>
									</div>
									<div class="form-floating mb-3">
										<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
										<label for="floatingInput">Surel</label>
									</div>
									<div class="form-floating mb-3">
										<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
										<label for="floatingTextarea2">Pesan Anda</label>
									</div>
									<div class="mb-3">
										<button type="button" class="btn btn-info">Kirim</button>
									</div>
								</form>
							</div>
						</div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>


