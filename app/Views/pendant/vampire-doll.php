<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648106918/p2022/vampire-doll_akn8wz.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Dalam turnku saat tiba di areaku, <span class="text-danger">30%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['38'] ?>">kurung penjara</a> semua lawan dalam line yang sama / Saat tiba di landmarkku, <span class="text-danger">35%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['137'] ?>">bleeding</a> selama 1 turn kepada lawan dalam line.
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Dalam turnku saat tiba di areaku, <span class="text-danger">45%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['38'] ?>">kurung penjara</a> semua lawan dalam line yang sama / Saat tiba di landmarkku, <span class="text-danger">50%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['137'] ?>">bleeding</a> selama 1 turn kepada lawan dalam line.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2022">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>