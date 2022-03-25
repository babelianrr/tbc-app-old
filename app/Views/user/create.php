<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>

<?php
$session = session();
$errors = $session->getFlashdata('errors');
$success = $session->getFlashdata('success');

$username = [
  'name' => 'username',
  'class' => 'form-control form-control-user'
];
$password = [
  'name' => 'password',
  'class' => 'form-control form-control-user'
];
$repeatPassword = [
  'name' => 'repeatPassword',
  'class' => 'form-control form-control-user'
];
$name = [
  'name' => 'name',
  'class' => 'form-control form-control-user'
];
$email = [
  'name' => 'email',
  'type' => 'email',
  'class' => 'form-control form-control-user'
];
$birth_date = [
  'name' => 'birth_date',
  'type' => 'date',
  'class' => 'form-control form-control-user'
];
$address = [
  'name' => 'address',
  'class' => 'form-control form-control-user'
];
$phone = [
  'name' => 'phone',
  'type' => 'number',
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
              <div class="p-5">
                <div class="text-center">
                  <p class="h4 text-gray-900 mb-4">Tambah Pengguna</p>
                </div>
                <div class="mb-3 px-3 py-3">
                  <?= form_open_multipart(base_url('/user/create')) ?>
                  <div class="form-group">
                    <label for="username"><?= form_label('Username', 'username') ?></label>
                    <div><?= form_input($username) ?></div>
                  </div>
                  <div class="form-group">
                    <label for="password"><?= form_label('Password', 'password') ?></label>
                    <div><?= form_password($password) ?></div>
                  </div>
                  <div class="form-group">
                    <label for="repeatPassword"><?= form_label('Repeat Password', 'repeatPassword') ?></label>
                    <div><?= form_password($repeatPassword) ?></div>
                  </div>
                  <div class="form-group">
                    <label for="name"><?= form_label('Name', 'name') ?></label>
                    <div><?= form_input($name) ?></div>
                  </div>
                  <div class="form-group">
                    <label for="birth_date"><?= form_label('Birth Date', 'birth_date') ?></label>
                    <div><?= form_input($birth_date) ?></div>
                  </div>
                  <div class="form-group">
                    <label for="email"><?= form_label('E-mail', 'email') ?></label>
                    <div><?= form_input($email) ?></div>
                  </div>
                  <div class="form-group">
                    <label for="phone"><?= form_label('Phone Number', 'phone') ?></label>
                    <div><?= form_input($phone) ?></div>
                  </div>
                  <div class="form-group">
                    <label for="address"><?= form_label('Address', 'address') ?></label>
                    <div><?= form_textarea($address) ?></div>
                  </div>
                  <div class="form-group">
                    <label for="avatar"><?= form_label('Avatar', 'avatar') ?></label>
                    <div><?= form_upload($avatar) ?></div>
                  </div>
                  <div class="mt-4">
                    <?= form_submit($submit) ?>
                  </div>
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
<?= $this->endSection() ?>