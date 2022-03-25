<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100540/c2020/eunseol_llgznb.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a> areaku, <span class="text-danger">70%</span> selenggarakan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['103'] ?>">konser</a> / Saat tiba di area <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['103'] ?>">konser</a>ku, <span class="text-danger">70%</span> selenggarakan konser tambahan &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['86'] ?>">prioritas konstruksi</a>&#62;.
            <br>
            &#10113; Saat tiba di landmarkku, <span class="text-danger">50% </span><a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['36'] ?>">kendalikan</a> salah satu lawan secara acak / Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['76'] ?>">teleport</a>, <span class="text-danger">40%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['90'] ?>">panggil</a> lawan ke posisiku lalu nonaktifkan skill lawan.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>