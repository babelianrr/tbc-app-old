<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648102661/p2022/spaceship-de-awk_kb5ray.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['48'] ?>">membangun</a> 3 bangunan, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['57'] ?>">pindah ke posisi semula</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +30%) / Saat tiba di areaku, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['37'] ?>">kunci multiplier</a> area yang didatangi lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['88'] ?>">terapkan biaya sewa x2, x4, x8</a> secara acak di semua areaku.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2022">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>