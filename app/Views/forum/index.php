<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<?php
$session = session();
$errors = $session->getFlashdata('errors');
$success = $session->getFlashdata('success');
$keyword = [
  'name' => 'keyword',
  'value' => $keyword,
  'placeholder' => 'Cari Thread',
  'class' => 'form-control'
];
$submit = [
  'name' => 'submit',
  'value' => 'Cari',
  'type' => 'submit',
  'class' => 'btn btn-outline-primary',
  'id' => 'button-addon2'
];
?>
<div class="container">
  <div class="row">
    <div class="col-5">
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
    <div class="col-xl-8 col-lg-9 col-md-10 col-sm-11">
      <h1>Forum</h1>
      <a class="btn btn-outline-primary btn-sm" href="<?= base_url('forum/create') ?>">Buat Thread Baru</a>
      <?= form_open('forum/index') ?>
      <div class="input-group my-3">
        <?= form_input($keyword) ?>
        <?= form_submit($submit) ?>
      </div>
      <?= form_close() ?>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 table-responsive">
      <?php if (!empty($threads->getResult()) && is_array($threads->getResult())) : ?>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Judul Thread</th>
              <th scope="col">Rating</th>
              <th scope="col">Kategori</th>
              <th scope="col">Penulis</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($threads->getResult() as $key => $thread) : ?>
              <tr>
                <th scope="row"><?= $offset + $key + 1 ?>.</th>
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
                <td><?= $thread->category ?></td>
                <td><?= $thread->name ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php else : ?>
        <div>
          <h3>Tidak ada postingan</h3>
          <p>Belum ada postingan yang dibuat di bagian ini.</p>
        </div>
      <?php endif; ?>
    </div>
    <?= \Config\Services::pager()->makeLinks($page, $perPage, $total, 'forum_pagination') ?>
  </div>
</div>
<?= $this->endSection() ?>