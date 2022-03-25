<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648104259/p2021/ninja_chef_teddy_bear_awaken_d36x73.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan tiba di areaku, <span class="text-danger">60%</span> berikan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['112'] ?>">menu rahasia chef</a> / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a>, <span class="text-danger">40%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu areaku.
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan tiba di areaku, <span class="text-danger">80%</span> berikan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['112'] ?>">menu rahasia chef</a> / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a>, <span class="text-danger">55%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu areaku.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>