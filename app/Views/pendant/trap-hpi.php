<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648106915/p2022/trap-hpi_u1fp3r.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku, <span class="text-danger">65%</span> bayar 70% biaya sewa dasar area tersebut untuk <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['90'] ?>">panggil</a> salah satu lawan / Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">50%</span> pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['67'] ?>">jebakan pegas</a> di area yang diinginkan.
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku, <span class="text-danger">85%</span> bayar 70% biaya sewa dasar area tersebut untuk <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['90'] ?>">panggil</a> salah satu lawan / Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">75%</span> pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['67'] ?>">jebakan pegas</a> di area yang diinginkan.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2022">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>