<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100489/c2020/mayo_nyitdw.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; <a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['0'] ?>">Ketepatan kontrol dadu</a> meningkat <span class="text-danger">53%</span> (<a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['55'] ?>">pertumbuhan ganjil genap</a> +15%) / Saat permainan dimulai, marble awal meningkat <span class="text-danger">90%</span>.
            <br>
            &#10113; Saat turnku dimulai, <span class="text-danger">25%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam line.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100491/c2020/mayo-awk_itewx8.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; <a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['0'] ?>">Ketepatan kontrol dadu</a> meningkat <span class="text-danger">55%</span> (<a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['55'] ?>">pertumbuhan ganjil genap</a> +15%) / Saat permainan dimulai, marble awal meningkat <span class="text-danger">150%</span>.
            <br>
            &#10113; Saat turnku dimulai, <span class="text-danger">38%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam line.
          </p>
        </div>
      </div>
    </div>
    <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
  </div>
</div>
<?= $this->endSection() ?>