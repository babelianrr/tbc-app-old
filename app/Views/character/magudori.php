<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100488/c2020/magudori_pi1c8s.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['9'] ?>">blok sudut</a>, <span class="text-danger">90%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> salah satu areaku menjadi landmark lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['13'] ?>">chance dadu 1x</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
            <br>
            &#10113; Dalam turnku saat tiba di landmarkku, <span class="text-danger">50%</span> mendapat kartu kesempatan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['34'] ?>">isi ulang</a> / Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">30%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['9'] ?>">blok sudut</a> atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['11'] ?>">blok spesial map</a>.
          </p>
        </div>
      </div>
    </div>
    <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
  </div>
</div>
<?= $this->endSection() ?>