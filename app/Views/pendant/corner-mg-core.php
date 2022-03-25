<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648103744/p2020/corner-mg-core_iklnvd.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['9'] ?>">blok sudut</a>, <span class="text-danger">70%</span> pilih <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['5'] ?>">area tim</a> untuk <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['91'] ?>">tarik magnet olimpiade</a> lalu <span class="text-danger">40%</span> pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['92'] ?>">kartu undangan olimpiade</a> di semua <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['11'] ?>">blok spesial map</a>.
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['9'] ?>">blok sudut</a>, <span class="text-danger">80%</span> pilih <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['5'] ?>">area tim</a> untuk <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['91'] ?>">tarik magnet olimpiade</a> lalu <span class="text-danger">75%</span> pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['92'] ?>">kartu undangan olimpiade</a> di semua <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['11'] ?>">blok spesial map</a>.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>