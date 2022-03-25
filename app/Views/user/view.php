<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<?php
$session = session();
$errors = $session->getFlashdata('errors');
$success = $session->getFlashdata('success');
?>
<div class="container">
  <div class="row">
    <!-- Success/Alert -->
    <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
      <?php if ($errors != null) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill" />
          </svg>
          <div>
            <p class="h6">Some error&#40;s&#41; occured&#33;</p>
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
            <p class="h6">Success&#33;</p>
            <small><?= $success ?></small>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="row my-3">
    <div class="col">
      <small><a href="<?= base_url('user/') ?>">&#8592; Kembali</a></small>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-7 col-md-9 col-sm-12">
      <h1 class="text-center">Detail Pengguna</h1>
      <?php if (session()->get('id') == $users->id) : ?>
        <div class="card mb-3" style="max-width: 720px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="<?= base_url('uploads/' . $users->avatar) ?>" class="img-fluid rounded-start img-thumbnail" alt="<?= $users->name ?>" style="width: fit-content;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Nama</h5>
                <p class="card-text"><?= $users->name ?></p>
                <h5 class="card-title">Username</h5>
                <p class="card-text">&#64;<?= $users->username ?></p>
                <h5 class="card-title">Email</h5>
                <p class="card-text"><?= $users->email ?></p>
                <h5 class="card-title">Alamat</h5>
                <p class="card-text"><?= $users->address ?></p>
                <h5 class="card-title">Nomor Telepon</h5>
                <p class="card-text"><?= $users->phone ?></p>
                <h5 class="card-title">Tanggal Lahir</h5>
                <p class="card-text"><?= $users->birth_date ?></p>
                <p>
                  <small class="text-muted">Mendaftar pada <?= $users->created_at ?></small>
                </p>
              </div>
            </div>
            <div class="card-footer">
              <a class="btn btn-info text-dark" href="<?= base_url('user/update/' . $users->id) ?>">Perbaharui Info</a>
              <a class="btn btn-warning text-dark" href="#">Ganti Kata Sandi</a>
              <a class="btn btn-danger" href="<?= base_url('user/delete/' . $users->id) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus akun anda?')">Hapus Akun</a>
            </div>
          </div>
        </div>
      <?php else : ?>
        <div class="card mb-3" style="max-width: 720px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="<?= base_url('uploads/' . $users->avatar) ?>" class="img-fluid rounded-start img-thumbnail" alt="<?= $users->name ?>" style="width: fit-content;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Nama</h5>
                <p class="card-text"><?= $users->name ?></p>
                <h5 class="card-title">Username</h5>
                <p class="card-text">&#64;<?= $users->username ?></p>
                <h5 class="card-title">Email</h5>
                <p class="card-text"><?= $users->email ?></p>
                <h5 class="card-title">Alamat</h5>
                <p class="card-text"><?= $users->address ?></p>
                <h5 class="card-title">Nomor Telepon</h5>
                <p class="card-text"><?= $users->phone ?></p>
                <h5 class="card-title">Tanggal Lahir</h5>
                <p class="card-text"><?= $users->birth_date ?></p>
                <p>
                  <small class="text-muted">Mendaftar pada <?= $users->created_at ?></small>
                </p>
              </div>
            </div>
            <div class="card-footer">
              <a class="btn btn-info text-dark" href="<?= base_url('messages/create/' . $users->id) ?>">Kirim Direct Message</a>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<?= $this->endSection() ?>