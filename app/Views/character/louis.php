<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098842/c2019/louis_zpg13b.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; <a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['0'] ?>">Ketepatan kontrol dadu</a> meningkat <span class="text-danger">54%</span> (<a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['55'] ?>">pertumbuhan ganjil genap</a> +10%) / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a>, <span class="text-danger">35%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu areaku.
            <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a>, <span class="text-danger">35%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['84'] ?>">prioritas konstruksi</a>&#62;.
          </p>
        </div>
      </div>
    </div>
    <div class="card-footer"><a class="btn btn-secondary" href="/character/2019">Kembali</a></div>
  </div>
</div>
<?= $this->endSection() ?>