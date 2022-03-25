<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648102657/p2019/scarecrow-helmet_elw6ta.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; <a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['0'] ?>">Ketepatan kontrol dadu</a> meningkat <span class="text-danger">53%</span> (<a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['55'] ?>">pertumbuhan ganjil genap</a> +10%). / Saat melempar dadu lalu me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan, <span class="text-danger">73%</span> ubah wujud lawan menjadi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['89'] ?>">boneka sawah</a>.
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; <a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['0'] ?>">Ketepatan kontrol dadu</a> meningkat <span class="text-danger">53%</span> (<a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['55'] ?>">pertumbuhan ganjil genap</a> +10%). / Saat melempar dadu lalu me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan, <span class="text-danger">80%</span> ubah wujud lawan menjadi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['89'] ?>">boneka sawah</a>.
          </p>
          <h4 class="card-title">[Dark] Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; <a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['0'] ?>">Ketepatan kontrol dadu</a> meningkat <span class="text-danger">56%</span> (setelah 2 turn, bertumbuh +10%) / Saat melempar dadu lalu me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan, <span class="text-danger">80%</span> ubah wujud lawan menjadi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['89'] ?>">boneka sawah</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648103750/p2020/scarecrow-helmet-winter_bhszal.png" alt="<?= $pdt['slug'] ?>-winter">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken Winter <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; <a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['0'] ?>">Ketepatan kontrol dadu</a> meningkat <span class="text-danger">54%</span> (setelah 2 turn, bertumbuh +10%) / Saat melempar dadu lalu me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan, <span class="text-danger">80%</span> ubah wujud lawan menjadi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['89'] ?>">manusia salju</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648104266/p2021/scarecrow-helmet-summer_dtznrb.png" alt="<?= $pdt['slug'] ?>-winter">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken Summer <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; <a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['0'] ?>">Ketepatan kontrol dadu</a> meningkat <span class="text-danger">54%</span> (setelah 2 turn, bertumbuh +10%) / Saat melempar dadu lalu me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan, <span class="text-danger">80%</span> ubah wujud lawan menjadi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['89'] ?>">manusia salju</a>.
          </p>
        </div>
      </div>
    </div>
    <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2019">Kembali</a></div>
  </div>
</div>
<?= $this->endSection() ?>