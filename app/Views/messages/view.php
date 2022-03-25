<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row my-3">
    <h1>Baca Pesan</h1>
    <small><a href="<?= base_url('messages/inbox') ?>">Kembali ke Kotak Masuk</a></small>
  </div>
  <div class="row my-3">
    <div class="col-xl-8 col-lg-9 col-md-10 col-sm-11">
      <div class="card mb-3">
        <div class="card-header">
          <p class="h5">Pengirim : <?= $sender->name ?></p>
          <small>Penerima : Saya (<?= $recipient->name ?>)</small>
        </div>
        <div class="card-body">
          <?= $messages->message ?>
        </div>
        <div class="card-footer">
          <a href="<?= base_url('messages/create/' . $sender->id) ?>">Balas</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>