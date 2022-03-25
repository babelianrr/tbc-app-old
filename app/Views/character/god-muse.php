<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098831/c2019/god-muse_dlqs4p.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <h5 class="card-title">Skill</h5>
          <p class="card-text">
            &#10112; Saat tiba di blok keliling dunia, <span class="text-danger">65%</span> segera pilih tujuan dan berangkat lalu mendapat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['14'] ?>">chance dadu tambahan</a>.
            <br>
            &#10113; Saat tiba di area lawan, <span class="text-danger">50%</span> berpindah ke blok keliling dunia / Saat mendatangi lawan, <span class="text-danger">70%</span> terima <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['24'] ?>">donasi</a> area termahal milik lawan.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2019">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>