<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<?php
$session = session();
$errors = $session->getFlashdata('errors');
$success = $session->getFlashdata('success');
?>
<div class="container mb-5">
	<!-- Alert Sukses/gagal -->
	<div class="row mt-3">
		<div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
			<?php if ($errors != null) : ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
						<use xlink:href="#exclamation-triangle-fill" />
					</svg>
					<div>
						<p class="h5">Some error&#40;s&#41; occured&#33;</p>
						<p>
							<?php foreach ($errors as $err) : ?>
								<small>&#8226; <?= $err ?></small><br>
							<?php endforeach; ?>
						</p>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php endif; ?>

			<?php if ($success != null) : ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
						<use xlink:href="#check-circle-fill" />
					</svg>
					<div>
						<p class="h5">Success&#33;</p>
						<p><?= $success ?></p>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<!-- Header selamat datang -->
	<div class="row my-3">
		<div class="col">
			<header class="header" style="
						color: #111;
						background-image: url(https://res.cloudinary.com/dxlpys5st/image/upload/v1648126982/assets/TBC_FACEBOOK_COVER_qlhn1x.jpg);
						padding: 10rem;
						background-position: center;
						background-size: cover;
						background-repeat: no-repeat;">
			</header>
		</div>
	</div>
	<!-- Thread teratas (harus log in untuk akses) -->
	<?php if (session()->has('isLoggedIn')) : ?>
		<div class="row">
			<div class="col-xl-10 col-lg-10 col-md-11 col-sm-11">
				<h2>Thread Teratas</h2>
				<?php if (!empty($top_thread->getResult()) && is_array($top_thread->getResult())) : ?>
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">Peringkat</th>
								<th scope="col">Judul Thread</th>
								<th scope="col">Rating</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($top_thread->getResult() as $key => $thread) : ?>
								<tr>
									<th scope="row"><?= $key + 1 ?>.</th>
									<td><a href="<?= base_url('forum/view/' . $thread->id) ?>"><?= $thread->thread_title ?></a></td>
									<td>
										<?php for ($i = 0; $i < 5; $i++) {
											if ($i + 1 <= $thread->rating) {
												echo '<span class="fa fa-star checked"></span>';
											} else {
												echo '<span class="fa fa-star"></span>';
											}
										}
										?>
										<small>&#40;<?= $thread->count_star ?>&#41;</small>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<a class="btn btn-outline-info btn-sm" href="<?= base_url('forum/index') ?>">Pergi ke Forum</a>
				<?php else : ?>
					<div>
						<h3>Tidak ada thread teratas</h3>
						<p>Belum ada postingan yang dibuat maupun postingan yang diberi nilai.</p>
						<a class="btn btn-outline-info btn-sm" href="<?= base_url('forum/index') ?>">Pergi ke Forum</a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	<?php else : ?>
		<div></div>
	<?php endif; ?>
	<hr>
</div>
<?= $this->endSection() ?>