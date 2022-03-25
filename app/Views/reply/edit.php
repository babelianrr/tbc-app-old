<?= $this->extend('templates/template_create') ?>

<?= $this->section('content') ?>
<?php
$session = session();
$errors = $session->getFlashdata('errors');
$success = $session->getFlashdata('success');

$id = [
  'id' => $reply->id
];
$thread_id = [
  'thread_id' => $reply->thread_id,
];
$user_id = [
  'user_id' => session()->get('id'),
];
$created_by = [
  'created_by' => $reply->created_by,
];
$created_at = [
  'created_at' => $reply->created_at,
];
$reply_body = [
  'name' => 'reply_body',
  'id' => 'content',
  'value' => $reply->reply_body,
  'class' => 'form-control form-control-user'
];
$submit = [
  'name' => 'submit',
  'value' => 'Sunting',
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
                  <p class="h3 text-gray-900 mb-4">Sunting Komentar</p>
                </div>
                <div class="mb-3 px-3 py-3">
                  <?= form_open_multipart(base_url('reply/update/' . $reply->id)) ?>
                  <div class="form-group">
                    <?= form_hidden($id) ?>
                    <?= form_hidden($thread_id) ?>
                    <?= form_hidden($user_id) ?>
                    <?= form_hidden($created_by) ?>
                    <?= form_hidden($created_at) ?>
                    <div class="mb-3">
                      <?= form_label('Konten', 'reply_body') ?>
                      <div><?= form_textarea($reply_body) ?></div>
                    </div>
                  </div>
                  <div class="col">
                    <?= form_submit($submit) ?>
                    <a class="btn btn-outline-secondary" href="<?= base_url('forum/view/' . $thread->id) ?>">Batal</a>
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
        uploadUrl: "<?= base_url('reply/uploadImg') ?>",
      },
    }).then(editor => {
      console.log(editor);
    }).catch(error => {
      console.error(error);
    });
</script>
<?= $this->endSection() ?>