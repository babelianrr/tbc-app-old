<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648104256/p2021/ice-rapier_ueu9z3.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turnku berakhir ketika aku berdiri di atas landmarkku, <span class="text-danger">70%</span> pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['136'] ?>">duri es</a> di semua landmark milikku / Setiap chance daduku, <span class="text-danger">40%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['168'] ?>">pilih arah gerak</a> untuk melempar dadu.
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turnku berakhir ketika aku berdiri di atas landmarkku, <span class="text-danger">90%</span> pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['136'] ?>">duri es</a> di semua landmark milikku / Setiap chance daduku, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['168'] ?>">pilih arah gerak</a> untuk melempar dadu.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>