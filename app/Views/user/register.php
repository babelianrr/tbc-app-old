<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>

<?php
$session = session();
$errors = $session->getFlashdata('errors');
$success = $session->getFlashdata('success');

$username = [
  'name' => 'username',
  'placeholder' => 'Username',
  'class' => 'form-control form-control-user'
];
$password = [
  'name' => 'password',
  'placeholder' => 'Kata Sandi',
  'class' => 'form-control form-control-user'
];
$repeatPassword = [
  'name' => 'repeatPassword',
  'placeholder' => 'Ulangi Kata Sandi',
  'class' => 'form-control form-control-user'
];
$name = [
  'name' => 'name',
  'placeholder' => 'Nama Lengkap',
  'class' => 'form-control form-control-user'
];
$email = [
  'name' => 'email',
  'type' => 'email',
  'placeholder' => 'Alamat Surel',
  'class' => 'form-control form-control-user'
];
$birth_date = [
  'name' => 'birth_date',
  'type' => 'date',
  'placeholder' => 'Tanggal Lahir',
  'class' => 'form-control form-control-user'
];
$address = [
  'name' => 'address',
  'placeholder' => 'Alamat Tempat Tinggal',
  'class' => 'form-control form-control-user'
];
$phone = [
  'name' => 'phone',
  'type' => 'text',
  'placeholder' => 'Nomor Telepon / Ponsel',
  'class' => 'form-control form-control-user'
];
$avatar = [
  'name' => 'avatar',
  'value' => null,
  'class' => 'form-control form-control-user',
  'id' => 'avatar',
  'onchange' => "previewImg()"
];
$submit = [
  'name' => 'submit',
  'value' => 'Register',
  'type' => 'submit',
  'class' => 'btn btn-primary'
];

?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <div class="row">
            <div class="col">
              <?php if ($errors != null) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                  </svg>
                  <div>
                    <p class="h6">Some error&#40;s&#41; occurred&#33;</p>
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
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Formulir Pendaftaran</h1>
                </div>
                <div class="mb-3 px-3 py-3">
                  <?= form_open_multipart(base_url('/user/create')) ?>
                  <div class="form-group">
                    <div class="mb-3"><?= form_input($username) ?></div>
                    <div class="mb-3"><?= form_password($password) ?></div>
                    <div class="mb-3"><?= form_password($repeatPassword) ?></div>
                    <div class="mb-3"><?= form_input($name) ?></div>
                    <div class="mb-3"><?= form_input($birth_date) ?></div>
                    <div class="mb-3"><?= form_input($email) ?></div>
                    <div class="mb-3"><?= form_input($phone) ?></div>
                    <div class="mb-3"><?= form_textarea($address) ?></div>
                    <div class="mb-3">
                      <strong><?= form_label('Avatar', 'avatar') ?></strong>
                      <?= form_upload($avatar) ?>
                    </div>
                    <?= form_submit($submit) ?>
                    <?= form_close() ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?= $this->endSection() ?>