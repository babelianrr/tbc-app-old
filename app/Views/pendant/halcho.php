<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="/img/p2021/<?= $pdt['slug'] ?>.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku, <span class="text-danger">77%</span> bayar 70% biaya sewa dasar area tersebut untuk <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['90'] ?>">panggil</a> salah satu lawan. / Saat tiba di areaku, mendapat marble sebanyak <span class="text-danger">72%</span> biaya konstruksi area tersebut.
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku, <span class="text-danger">85%</span> bayar 70% biaya sewa dasar area tersebut untuk <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['90'] ?>">panggil</a> salah satu lawan. / Saat tiba di areaku, mendapat marble sebanyak <span class="text-danger">120%</span> biaya konstruksi area tersebut.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>