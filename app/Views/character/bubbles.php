<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100535/c2020/bubbles_n0vhpu.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat melempar dadu, <span class="text-danger">30%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area di antara tujuan hasil dadu atau 2 blok depan belakangnya.
            <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['16'] ?>">monopoli warna</a>, <span class="text-danger">40%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> semua area dalam kompleks tersebut menjadi landmark / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">40%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['13'] ?>">chance dadu 1x</a>.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>