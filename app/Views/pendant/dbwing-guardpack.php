<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648104277/p2021/dbwing-guardpack_y1awjr.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">45%</span> pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['15'] ?>">checkpoint</a> di area yang diinginkan / Chance dadu dobel meningkat <span class="text-danger">25%</span> & Saat dadu dobel tiga kali berturut-turut dalam satu turn, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['58'] ?>">pindah ke semua area</a>.
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">60%</span> pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['15'] ?>">checkpoint</a> di area yang diinginkan / Chance dadu dobel meningkat <span class="text-danger">30%</span> & Saat dadu dobel tiga kali berturut-turut dalam satu turn, <span class="text-danger">95%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['58'] ?>">pindah ke semua area</a>.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>