<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098858/c2019/caren_s88lkm.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; <a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['0'] ?>">Ketepatan kontrol dadu</a> meningkat <span class="text-danger">54%</span> (<a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['55'] ?>">pertumbuhan ganjil genap</a> +10%) / Saat melempar dadu lalu me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan, <span class="text-danger">60%</span> ubah wujud lawan menjadi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['89'] ?>">boneka sawah</a>.
            <br>
            &#10113; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">45%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['85'] ?>">prioritas konstruksi</a>&#62; / Saat muncul <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['56'] ?>">peringatan monopoli</a> oleh lawan, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['38'] ?>">kurung penjara</a> lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098859/c2019/caren-awk_baxg16.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; <a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['0'] ?>">Ketepatan kontrol dadu</a> meningkat <span class="text-danger">55%</span> (<a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['55'] ?>">pertumbuhan ganjil genap</a> +10%) / Saat melempar dadu lalu me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan, <span class="text-danger">70%</span> ubah wujud lawan menjadi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['89'] ?>">boneka sawah</a>.
            <br>
            &#10113; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['85'] ?>">prioritas konstruksi</a>&#62; / Saat muncul <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['56'] ?>">peringatan monopoli</a> oleh lawan, <span class="text-danger">90%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['38'] ?>">kurung penjara</a> lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2019">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>