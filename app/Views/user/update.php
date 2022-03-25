<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>

<?php
$session = session();
$errors = $session->getFlashdata('errors');
$success = $session->getFlashdata('success');
$id = [
  'id' => $users->id
];
$username = [
  'name' => 'username',
  'value' => $users->username,
  'class' => 'form-control form-control-user'
];
$name = [
  'name' => 'name',
  'value' => $users->name,
  'class' => 'form-control form-control-user'
];
$email = [
  'name' => 'email',
  'type' => 'email',
  'value' => $users->email,
  'class' => 'form-control form-control-user'
];
$birth_date = [
  'name' => 'birth_date',
  'type' => 'date',
  'value' => $users->birth_date,
  'class' => 'form-control form-control-user'
];
$address = [
  'name' => 'address',
  'value' => $users->address,
  'class' => 'form-control form-control-user'
];
$phone = [
  'name' => 'phone',
  'type' => 'number',
  'value' => $users->phone,
  'class' => 'form-control form-control-user'
];
$avatar = [
  'name' => 'avatar',
  'value' => $users->avatar,
  'class' => 'form-control form-control-user',
  'id' => 'avatar',
  'onchange' => "previewImg()"
];
$submit = [
  'name' => 'submit',
  'value' => 'Submit',
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
              <!-- Success/Alert -->
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
              <!-- Form -->
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Perbaharui Pengguna</h1>
                </div>
                <div class="mb-3 px-3 py-3">
                  <?= form_open_multipart(base_url('/user/update/') . $users->id) ?>
                  <div class="mt-4 form-group">
                    <div><?= form_hidden($id) ?></div>
                  </div>
                  <div class="mt-4 form-group">
                    <label for="email"><?= form_label('Username', 'username') ?></label>
                    <div><?= form_input($username) ?></div>
                  </div>
                  <div class="mt-4 form-group">
                    <label for="name"><?= form_label('Name', 'name') ?></label>
                    <div><?= form_input($name) ?></div>
                  </div>
                  <div class="mt-4 form-group">
                    <label for="birth_date"><?= form_label('Birth Date', 'birth_date') ?></label>
                    <div><?= form_input($birth_date) ?></div>
                  </div>
                  <div class="mt-4 form-group">
                    <label for="email"><?= form_label('E-mail', 'email') ?></label>
                    <div><?= form_input($email) ?></div>
                  </div>
                  <div class="mt-4 form-group">
                    <label for="phone"><?= form_label('Phone Number', 'phone') ?></label>
                    <div><?= form_input($phone) ?></div>
                  </div>
                  <div class="mt-4 form-group">
                    <label for="address"><?= form_label('Address', 'address') ?></label>
                    <div><?= form_textarea($address) ?></div>
                  </div>
                  <div class="mt-4 row form-group">
                    <label for="avatar"><?= form_label('Avatar', 'avatar') ?></label>
                    <div class="col-3">
                      <img class="img-thumbnail img-preview" src="<?= base_url('uploads/' . $users->avatar) ?>" width="fit-content">
                    </div>
                    <div class="col-9">
                      <?= form_upload($avatar) ?>
                    </div>
                  </div>
                  <div class="mt-4 form-group">
                    <?= form_submit($submit) ?>
                    <a class="btn btn-danger" href="user/">Batal</a>
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