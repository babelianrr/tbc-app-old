<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648104252/p2021/gathering-helmet_o0kq2h.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['0'] ?>">Ketepatan kontrol dadu</a> meningkat <span class="text-danger">53%</span> / Saat tiba di blok sudut, <span class="text-danger">30%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['165'] ?>">kartu jebakan</a> di semua <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['11'] ?>">blok spesial map</a>.
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['0'] ?>">Ketepatan kontrol dadu</a> meningkat <span class="text-danger">60%</span> (<a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['55'] ?>">pertumbuhan ganjil genap</a> +5%) / Saat tiba di blok sudut, <span class="text-danger">50%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['165'] ?>">kartu jebakan</a> di semua <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['11'] ?>">blok spesial map</a>.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>