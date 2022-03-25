<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100512/c2020/rena-world_csns3d.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a> areaku, <span class="text-danger">70%</span> selenggarakan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['103'] ?>">konser</a> lalu 40% <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area kosong secara acak.
            <br>
            &#10113; Saat tiba di area <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['103'] ?>">konser</a>ku, <span class="text-danger">70%</span> selenggarakan konser tambahan &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['86'] ?>">prioritas konstruksi</a>&#62;.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>