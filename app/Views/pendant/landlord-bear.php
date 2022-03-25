<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648103762/p2020/landlord-bear_ianvq5.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan tiba di areaku, tagih tambahan biaya sewa tergantung pada jumlah area yang kumiliki (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['45'] ?>">maks. 200%</a>) / <span class="text-danger">40%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['68'] ?>">super overcharge</a> kepada lawan selama 2 turn.
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan tiba di areaku, tagih tambahan biaya sewa tergantung pada jumlah area yang kumiliki (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['176'] ?>">maks. 250%</a>) / <span class="text-danger">65%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['68'] ?>">super overcharge</a> kepada lawan selama 2 turn.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>