<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648103754/p2020/shield-shoes_kksszq.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di areaku, terapkan biaya sewa x2 lalu <span class="text-danger">40%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam line / Saat tiba di areaku, <span class="text-danger">40%</span> isi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['64'] ?>">shield</a> (maks. 2 lapis).
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di areaku, terapkan biaya sewa x2 lalu <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam line / Saat tiba di areaku, <span class="text-danger">60%</span> isi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['64'] ?>">shield</a> (maks. 2 lapis).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>