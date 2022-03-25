<?= $this->extend('templates/template_create') ?>

<?= $this->section('content') ?>
<?php
$session = session();
$errors = $session->getFlashdata('errors');
$success = $session->getFlashdata('success');

$title = [
  'name' => 'title',
  'class' => 'form-control form-control-user'
];
$content = [
  'name' => 'content',
  'id' => 'content',
  'class' => 'form-control form-control-user'
];
$categoryId = [
  'name' => 'category-id',
  'options' => $categoryArray,
  'selected' => null,
  'class' => 'form-select'
];
$submit = [
  'name' => 'submit',
  'value' => 'Kirim',
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
          <div class="row">
            <div class="col">
              <div class="p-5">
                <div class="text-center">
                  <p class="h2 text-gray-900 mb-4">Buat Thread</p>
                </div>
                <div class="mb-3 px-3 py-3">
                  <?= form_open_multipart(base_url('forum/create')) ?>
                  <?= csrf_field() ?>
                  <div class="form-group">
                    <div class="mb-3">
                      <?= form_label('Judul Thread', 'title') ?>
                      <?= form_input($title) ?>
                    </div>
                    <div class="mb-3">
                      <?= form_label('Kategori', 'category-id') ?>
                      <?= form_dropdown($categoryId) ?>
                    </div>
                    <div class="mb-3">
                      <?= form_label('Konten', 'content') ?>
                      <?= form_textarea($content) ?>
                    </div>
                  </div>
                  <div class="col">
                    <?= form_submit($submit) ?>
                    <a class="btn btn-outline-secondary" href="<?= base_url('forum/index') ?>">Batal</a>
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

<script src="<?= base_url('ckeditor5/ckeditor.js') ?>"></script>
<script>
  ClassicEditor
    .create(document.querySelector('#content'), {
      ckfinder: {
        uploadUrl: "<?= base_url('forum/uploadImg') ?>",
      },
    }).then(editor => {
      console.log(editor);
    }).catch(error => {
      console.error(error);
    });
</script>
<?= $this->endSection() ?>