<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100518/c2020/ren_btru1v.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku, <span class="text-danger">65%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['113'] ?>">tandai</a> lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['90'] ?>">panggil</a> semua lawan dalam line yang sama / Saat turnku dimulai, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['75'] ?>">teleport</a> ke salah satu area dalam line dimana lawan yang ditandai sedang berdiri.
            <br>
            &#10113; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['85'] ?>">prioritas konstruksi</a>&#62; / Saat lawan tiba di landmarkku, <span class="text-danger">45%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['23'] ?>">discharge</a> kepada lawan.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100510/c2020/ren-awk_vxfqng.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['113'] ?>">tandai</a> lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['90'] ?>">panggil</a> semua lawan dalam line yang sama / Saat turnku dimulai, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['75'] ?>">teleport</a> ke salah satu area dalam line dimana lawan yang ditandai sedang berdiri.<br>
            &#10113; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['85'] ?>">prioritas konstruksi</a>&#62; / Saat lawan tiba di landmarkku, <span class="text-danger">65%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['23'] ?>">discharge</a> kepada lawan.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>