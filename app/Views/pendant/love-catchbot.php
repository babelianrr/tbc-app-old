<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648106935/p2022/love-catchbot_lnl5ez.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['76'] ?>">teleport</a>, <span class="text-danger">55%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['90'] ?>">panggil</a> lawan ke posisiku lalu nonaktifkan skill lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +30%) / Saat tiba di area lawan, <span class="text-danger">90%</span> bebas biaya sewa lalu berpindah ke salah satu area kosong terdekat dalam line yang sama dan mendapat marble sebanyak 3 kali gaji (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2022">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>