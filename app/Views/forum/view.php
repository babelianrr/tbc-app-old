<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<?php
helper('form');
$session = session();
$avatar = $usersModel->findColumn('avatar');
$user_id = session()->get('id');
$errors = $session->getFlashData('errors');
$success = $session->getFlashData('success');

$content = [
  'name' => 'content',
  'id' => 'content',
  'class' => 'form-control form-control-user'
];
$submit = [
  'name' => 'submit',
  'value' => 'Kirim',
  'type' => 'submit',
  'class' => 'btn btn-primary'
];

$hidden = [
  'thread_id' => $thread->id,
  'user_id' => session()->get('id'),
  'star' => 0
];
$submitStar = [
  'name' => 'submit',
  'value' => 'Rate',
  'type' => 'submit',
  'class' => 'btn btn-info btn-sm'
];
?>
<div class="container">
  <div class="row my-3">
    <!-- Alert sukses/gagal -->
    <div class="col-xl-7 col-lg-8 col-md-9 col-sm-10">
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
  <div class="row my-3">
    <small class="mb-3"><a href="<?= base_url('forum/index') ?>">&#8592; Kembali ke daftar postingan</a></small>
    <!-- Thread -->
    <div class="col-xl-8 col-lg-9 col-md-10 col-sm-11">
      <div class="row">
        <h2><?= $thread->thread_title ?></h2>
        <small>Ditulis oleh <a href="<?= base_url('user/view/' . $user->id) ?>"><?= $user->username ?></a> pada <?= $thread->created_at ?>. Kategori : <?= $category->category ?></small>
      </div>
      <?php if (session()->get('id') == $thread->created_by) : ?>
        <div class="card mb-5" style="width: 1080px;">
          <div class="card-body">
            <div class="card-text">
              <?= $thread->thread_body ?>
            </div>
          </div>
          <div class="card-footer">
            <div class="mb-2">
              <strong>Rating : </strong>
              <?php for ($i = 0; $i < 5; $i++) {
                if ($i + 1 <= $rating) {
                  echo '<span class="fa fa-star checked"></span>';
                } else {
                  echo '<span class="fa fa-star"></span>';
                }
              }
              ?>
            </div>
            <div>
              <button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Beri Rating
              </button>
            </div>
            <hr>
            <a class="btn btn-outline-warning btn-sm" href="<?= base_url('forum/update/' . $thread->id) ?>">Sunting</a>
            <a class="btn btn-outline-danger btn-sm" href="<?= base_url('forum/delete/' . $thread->id) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus thread \'<?= $thread->thread_title ?>\'?')">Hapus</a>
          </div>
        </div>
      <?php else : ?>
        <div class="card mb-5" style="width: 1080px;">
          <div class="card-body">
            <div class="card-text">
              <?= $thread->thread_body ?>
            </div>
          </div>
          <div class="card-footer">
            <div class="mb-2">
              <strong>Rating : </strong>
              <?php for ($i = 0; $i < 5; $i++) {
                if ($i + 1 <= $rating) {
                  echo '<span class="fa fa-star checked"></span>';
                } else {
                  echo '<span class="fa fa-star"></span>';
                }
              }
              ?>
            </div>
            <button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Beri Rating
            </button>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <hr>
    <!-- Form komentar -->
    <div class="col-xl-9 col-lg-10 col-md-11 col-sm-12 mb-3">
      <div class="row">
        <div class="mb-3">
          <h4>Tulis Komentar</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-2">
          <img class="img-fluid img-thumbnail rounded-circle" src="<?= base_url('uploads/' . $avatar[$user_id - 1]) ?>" alt="avatar" width="100px">
        </div>
        <div class="col-10">
          <?= form_open_multipart(base_url('reply/create/' . $thread->id)) ?>
          <?= csrf_field() ?>
          <div class="mb-3 reply">
            <div><?= form_textarea($content) ?></div>
          </div>
          <div class="col">
            <?= form_submit($submit) ?>
          </div>
          <?= form_close() ?>
        </div>
      </div>
    </div>
    <!-- Kolom komentar -->
    <div class="col-xl-8 col-lg-9 col-md-10 col-sm-11">
      <div class="row">
        <div class="mb-3">
          <h4>Komentar</h4>
        </div>
        <?php if (!empty($reply->getResult()) && is_array($reply->getResult())) : ?>
          <?php foreach ($reply->getResult() as $r) : ?>
            <div class="col-sm-8 col-md-7 col-lg-6 col-xl-6 reply">
              <div class="row">
                <!-- Avatar  -->
                <div class="col-4">
                  <img class="img-fluid img-thumbnail rounded-circle" src="<?= base_url('uploads/' . $r->avatar) ?>" alt="<?= $r->name ?>" width="100px">
                </div>
                <!-- Komentar -->
                <div class="col-8">
                  <div class="card mb-3" style="width: 720px;">
                    <?php if (session()->get('username') == $r->username) : ?>
                      <div class="card-header">
                        <p class="h5"><?= $r->name ?></p>
                        <small>Ditulis pada <?= $r->created_at ?>.</small>
                      </div>
                      <div class="card-body">
                        <div class="card-text">
                          <?= $r->reply_body ?>
                        </div>
                      </div>
                      <div class="card-footer">
                        <a href="<?= base_url('reply/edit/' . $r->id) ?>" class="btn btn-outline-secondary btn-sm">Sunting</a>
                        <a class="btn btn-outline-danger btn-sm" href="<?= base_url('reply/delete/' . $r->id . '/' . $thread->id) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus komentar ini?')">Hapus</a>
                      </div>
                    <?php else : ?>
                      <div class="card-header">
                        <p class="h5"><?= $r->name ?></p>
                        <small>Ditulis pada <?= $r->created_at ?>.</small>
                      </div>
                      <div class="card-body">
                        <div class="card-text">
                          <?= $r->reply_body ?>
                        </div>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <br>
          <?php endforeach; ?>
        <?php else : ?>
          <div>
            <p><i>Belum ada komentar yang dibuat di thread ini.</i></p>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <!-- Divider-->
    <hr>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <?= form_open('forum/rate') ?>
      <div class="modal-header">
        <h6 class="modal-title" id="staticBackdropLabel">Berikan rating pada thread ini</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex justify-content-center">
        <div>
          <span class="fa fa-star" id="f_star_1" onclick="rate(1)"></span>
          <span class="fa fa-star" id="f_star_2" onclick="rate(2)"></span>
          <span class="fa fa-star" id="f_star_3" onclick="rate(3)"></span>
          <span class="fa fa-star" id="f_star_4" onclick="rate(4)"></span>
          <span class="fa fa-star" id="f_star_5" onclick="rate(5)"></span>
        </div>
        <?= form_hidden($hidden) ?>
      </div>
      <div class="modal-footer">
        <?= form_submit($submitStar) ?>
      </div>
      <?= form_close() ?>
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

  function rate(id) {
    document.getElementsByName("star")[0].value = id;
    switch (id) {
      case 1:
        checked("f_star_1");
        unchecked("f_star_2");
        unchecked("f_star_3");
        unchecked("f_star_4");
        unchecked("f_star_5");
        break;
      case 2:
        checked("f_star_1");
        checked("f_star_2");
        unchecked("f_star_3");
        unchecked("f_star_4");
        unchecked("f_star_5");
        break;
      case 3:
        checked("f_star_1");
        checked("f_star_2");
        checked("f_star_3");
        unchecked("f_star_4");
        unchecked("f_star_5");
        break;
      case 4:
        checked("f_star_1");
        checked("f_star_2");
        checked("f_star_3");
        checked("f_star_4");
        unchecked("f_star_5");
        break;
      case 5:
        checked("f_star_1");
        checked("f_star_2");
        checked("f_star_3");
        checked("f_star_4");
        checked("f_star_5");
        break;
      default:
    }

  }

  function checked(star_id) {
    var element = document.getElementById(star_id);
    element.classList.add("checked");
  }

  function unchecked(star_id) {
    var element = document.getElementById(star_id);
    element.classList.remove("checked");
  }
</script>

<?= $this->endSection() ?>