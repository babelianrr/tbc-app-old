<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098825/c2019/rena_btqul7.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a> areaku, <span class="text-danger">80%</span> selenggarakan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['103'] ?>">konser</a>.
            <br>
            &#10113; Dalam turnku saat tiba di area konserku, <span class="text-danger">90%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> landmark.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098826/c2019/rena-idol_xpl6yl.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Idol <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a> areaku, <span class="text-danger">80%</span> selenggarakan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['103'] ?>">konser</a>.
            <br>
            &#10113; Dalam turnku saat tiba di area konserku, <span class="text-danger">90%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> landmark, 75% selenggarakan konser tambahan &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['86'] ?>">prioritas konstruksi</a>&#62;.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098830/c2019/rena-super_ufpbgu.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Superstar <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a> areaku, <span class="text-danger">90%</span> selenggarakan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['103'] ?>">konser</a>.
            <br>
            &#10113; Dalam turnku saat tiba di area konserku, <span class="text-danger">90%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> landmark, 80% selenggarakan konser tambahan &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['86'] ?>">prioritas konstruksi</a>&#62;.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2019">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>