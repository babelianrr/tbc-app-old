<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648103739/p2020/dbwing-jetpack_enqj4x.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turnku dimulai, <span class="text-danger">80%</span> mendapat efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['7'] ?>">bebas sewa destinasi</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali) / Chance dadu dobel meningkat <span class="text-danger">30%</span> & Saat dadu dobel tiga kali berturut-turut dalam satu turn, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['58'] ?>">pindah ke semua area</a>.
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turnku dimulai, <span class="text-danger">90%</span> mendapat efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['7'] ?>">bebas sewa destinasi</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 3 kali) / Chance dadu dobel meningkat <span class="text-danger">30%</span> & Saat dadu dobel tiga kali berturut-turut dalam satu turn, <span class="text-danger">85%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['58'] ?>">pindah ke semua area</a>.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>