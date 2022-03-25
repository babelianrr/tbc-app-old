<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648103755/p2020/sky-town-de_geyuc6.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['49'] ?>">membangun</a>, <span class="text-danger">25%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> ke landmark lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu areaku (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +10%).
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['49'] ?>">membangun</a>, <span class="text-danger">40%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> ke landmark lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu areaku (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +15%).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>