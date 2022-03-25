<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100483/c2020/lilith_v1g2tl.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku, <span class="text-danger">70%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['36'] ?>">kendalikan</a> salah satu lawan secara acak / Saat lawan tiba di areaku, <span class="text-danger">65%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['53'] ?>">multiplier tetap</a> x4.<br>
            &#10113; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['76'] ?>">teleport</a>, <span class="text-danger">35%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['90'] ?>">panggil</a> lawan ke posisiku lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['83'] ?>">tukar marble</a> milik lawan dengan milikku dan nonaktifkan skill lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +25%).
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100485/c2020/lilith-awk_wtk79k.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku, <span class="text-danger">80% </span><a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['36'] ?>">kendalikan</a> salah satu lawan secara acak &#47; Saat lawan tiba di areaku, <span class="text-danger">80%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['53'] ?>">multiplier tetap</a> x4.
            <br>
            &#10113; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['76'] ?>">teleport</a>, <span class="text-danger">40%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['90'] ?>">panggil</a> lawan ke posisiku lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['83'] ?>">tukar marble</a> milik lawan dengan milikku dan nonaktifkan skill lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +30%).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>