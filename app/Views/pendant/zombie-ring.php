<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648102666/p2019/zombie-ring_nox4ug.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; <span class="text-danger">60%</span> nonaktifkan pertahanan milik lawan terhadap serangan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['29'] ?>">kartu kesempatan</a> dan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['72'] ?>">tarik magnet</a>) olehku / Saat mengambil pinjaman, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['59'] ?>">pindah paksa lawan ke pulau terpencil</a>, berubah wujud menjadi Zombi selama 5 turn dan mendapat efek penagihan biaya sewa tambahan 200% saat lawan tiba di areaku.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2019">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>