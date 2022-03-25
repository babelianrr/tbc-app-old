<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<?php
$session = session();
$errors = $session->getFlashdata('errors');
$success = $session->getFlashdata('success');
?>
<div class="container">
  <div class="row">
    <!-- Alert sukses/gagal -->
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
            <p class="h4">Success&#33;</p>
            <p><?= $success ?></p>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="row my-3">
    <div class="col-lg-8 col-md-10 col-sm-11">
      <h1>Halaman Pengguna</h1>
      <?php if (session()->get('role') == 0) : ?>
        <a class="btn btn-outline-primary btn-sm" href="/user/register">Tambah pengguna</a>
      <?php endif; ?>
    </div>
  </div>
  <?php if (session()->get('role') != 0) : ?>
    <div class="row my-3">
      <div class="col-lg-8 col-md-10 col-sm-11">
        <div class="card text-white bg-danger">
          <div class="card-body">
            <p class="h5">Anda tidak memiliki hak akses halaman ini!</p>
            <a class="btn btn-light btn-sm" href="<?= base_url('home/index') ?>">&#8592; Kembali</a>
          </div>
        </div>
      </div>
    </div>
  <?php else : ?>
    <div class="row my-3">
      <div class="col-lg-8 col-md-10 col-sm-11">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Username</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $key => $user) : ?>
              <tr>
                <th scope="row"><?= ($key + 1) ?>.</th>
                <td><?= $user->username ?></td>
                <td><?= $user->name ?></td>
                <td><?= $user->email ?></td>
                <td>
                  <a class="badge rounded-pill bg-primary" href="<?= base_url('user/view/' . $user->id) ?>">Detail</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  <?php endif; ?>
  <hr class="my-5">
</div>
<?= $this->endSection() ?>