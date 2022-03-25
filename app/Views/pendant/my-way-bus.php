<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648104257/p2021/my-way-bus_iutbff.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di areaku, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['77'] ?>">teleport lalu panggil</a> ke salah satu area maksimal 6 blok di depan / Saat lawan mendatangiku, <span class="text-danger">50%</span> terima <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['24'] ?>">donasi</a> area termahal milik lawan.
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di areaku, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['77'] ?>">teleport lalu panggil</a> ke salah satu area maksimal 6 blok di depan / Saat lawan mendatangiku, <span class="text-danger">75%</span> terima <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['24'] ?>">donasi</a> area termahal milik lawan.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>