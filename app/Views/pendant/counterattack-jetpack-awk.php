<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648104276/p2021/cjp-awk_kl30xe.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di area lawan, <span class="text-danger">80%</span> bebas biaya sewa lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['58'] ?>">pindah ke semua area</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali) / Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['44'] ?>">langsung membangun</a> landmarkku, <span class="text-danger">85%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['72'] ?>">tarik</a> lawan dalam line yang sama.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>