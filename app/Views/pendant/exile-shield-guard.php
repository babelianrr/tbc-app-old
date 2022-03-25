<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648104284/p2021/exile-shield-guard_m6ky5i.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan meng<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['31'] ?>">hancurkan bangunan</a> dan menge<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['10'] ?>">cat</a> landmarkku, <span class="text-danger">50%</span> aktifkan pertahanan / Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['76'] ?>">teleport</a> dua kali atau lebih dalam satu turn, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['130'] ?>">usir lawan ke pulau terpencil</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan meng<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['31'] ?>">hancurkan bangunan</a> dan menge<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['10'] ?>">cat</a> landmarkku, <span class="text-danger">80%</span> aktifkan pertahanan / Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['76'] ?>">teleport</a> dua kali atau lebih dalam satu turn, <span class="text-danger">90%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['130'] ?>">usir lawan ke pulau terpencil</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>