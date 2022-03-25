<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648103738/p2020/ultimate-ring_awulq0.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di area lawan, <span class="text-danger">100%</span> bebas biaya sewa (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 1 kali) &#47; <span class="text-danger">75%</span> bertahan dari serangan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['29'] ?>">kartu kesempatan</a> dan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['72'] ?>">tarik magnet</a>).
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di area lawan, <span class="text-danger">100%</span> bebas biaya sewa (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali) &#47; <span class="text-danger">90%</span> bertahan dari serangan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['29'] ?>">kartu kesempatan</a> dan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['72'] ?>">tarik magnet</a>).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>