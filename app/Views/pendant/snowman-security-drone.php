<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648106924/p2022/snowman-security-drone_hb5dg4.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat melempar dadu lalu me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan, <span class="text-danger">80%</span> ubah wujud lawan menjadi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['89'] ?>">boneka sawah</a> / Saat muncul <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['56'] ?>">peringatan monopoli</a> oleh lawan, <span class="text-danger">95%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['38'] ?>">kurung penjara</a> lawan lalu pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['8'] ?>">blackhole</a> di salah satu area rawan monopoli (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 1 kali).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2022">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>