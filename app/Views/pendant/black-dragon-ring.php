<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648102674/p2019/black-dragon-ring_xgmb6t.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat permainan dimulai, berubah wujud menjadi Naga Api dan marble awal meningkat <span class="text-danger">155%</span> / Mendapat efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['169'] ?>">Bubble Escape Pin</a>.
          </p>
          <h4 class="card-title">Black Dragon Untransforming Ring</h4>
          <p class="card-text">
            &#10112; Saat permainan dimulai, marble awal meningkat <span class="text-danger">155%</span> / Mendapat efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['169'] ?>">Bubble Escape Pin</a>.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2019">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>