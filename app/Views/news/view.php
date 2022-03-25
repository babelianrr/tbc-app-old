<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row my-3">
    <small class="mb-3"><a href="/news">&#8592; Kembali ke daftar berita</a></small>
    <div class="col">
      <h2><?= esc($news['title']) ?></h2>
      <p><?= $news['body'] ?></p>
    </div>
    <!-- Divider-->
    <hr class="my-1" />
  </div>
</div>
<?= $this->endSection() ?>