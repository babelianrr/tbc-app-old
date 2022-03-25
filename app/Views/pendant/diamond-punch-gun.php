<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648103741/p2020/diamond-punch-gun_wtgvem.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat melempar dadu lalu me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan, <span class="text-danger">45%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['25'] ?>">dorong</a> lawan ke salah satu areaku (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +10%) / <span class="text-danger">40%</span> bertahan dari <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['27'] ?>">efek berbahaya</a> yang diterapkan padaku.
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat melempar dadu lalu me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan, <span class="text-danger">65%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['25'] ?>">dorong</a> lawan ke salah satu areaku (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +10%) / <span class="text-danger">75%</span> bertahan dari <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['27'] ?>">efek berbahaya</a> yang diterapkan padaku.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648103742/p2020/diamond-punch-gun-family_qzmap8.png" alt="<?= $pdt['slug'] ?>-family">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">[Family] Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat melempar dadu lalu me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan, <span class="text-danger">67%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['25'] ?>">dorong</a> lawan ke salah satu areaku (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +10%) / <span class="text-danger">75%</span> bertahan dari <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['27'] ?>">efek berbahaya</a> yang diterapkan padaku.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>