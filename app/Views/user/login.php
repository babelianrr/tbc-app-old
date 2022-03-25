<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<?php
$session = session();
$errors = $session->getFlashData('errors');
$success = $session->getFlashData('success');

$username = [
  'name' => 'user-username',
  'placeholder' => 'Username',
  'class' => 'form-control form-control-user'
];
$password = [
  'name' => 'user-password',
  'autocomplete' => 'new-password',
  'placeholder' => 'Password',
  'class' => 'form-control form-control-user'
];
$submit = [
  'name' => 'submit',
  'value' => 'Log In',
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
              <div class="p-5">
                <div class="text-center">
                  <p class="h4 text-gray-900 mb-4">Halaman Log In</p>
                </div>
                <div class="mb-3 px-3 py-3">
                  <?= form_open(base_url('auth/login')) ?>
                  <div class="form-group">
                    <div class="mb-3">
                      <?= form_input($username) ?>
                    </div>
                    <div class="mb-3">
                      <?= form_password($password) ?>
                    </div>
                  </div>
                  <div>
                    <?= form_submit($submit) ?>
                  </div>
                  <hr>
                  <small><a href="<?= base_url('user/register') ?>">Belum punya akun&#63; Daftar sekarang&#33;</a></small>
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

<script type="text/javascript">
  function previewImg() {
    const avatar = document.querySelector("#avatar");
    const imgPreview = document.querySelector(".img-preview");
    const avatarFile = new FileReader();
    avatarFile.readAsDataURL(avatar.files[0]);
    avatarFile.onload = function(e) {
      imgPreview.src = e.target.result;
    };
  }
</script>
<?= $this->endSection() ?>