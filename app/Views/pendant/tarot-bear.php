<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648103736/p2020/tarot-bear_tee11f.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turn pertamaku dimulai, pilih salah satu dari pilihan item untuk menggunakan item tersebut hingga permainan berakhir. Terdapat tiga pilihan item yang berbeda:
            <br>
            - [Detention Tarot Bear]: Saat muncul <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['56'] ?>">peringatan monopoli</a> oleh lawan, <span class="text-danger">95%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['38'] ?>">kurung penjara</a> lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 1 kali) / Saat lawan tiba di areaku, tagih <span class="text-danger">180%</span> tambahan biaya sewa.
            <br>
            - [Discharge Tarot Bear]: Saat lawan tiba di landmarkku, <span class="text-danger">50%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['23'] ?>">discharge</a> kepada lawan / Saat lawan tiba di areaku, tagih <span class="text-danger">180%</span> tambahan biaya sewa.
            <br>
            - [Destruction Tarot Bear]: Saat melempar dadu dan melewati area lawan, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['31'] ?>">hancurkan bangunan</a> dan hapus efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['10'] ?>">cat</a> / Saat lawan tiba di areaku, tagih <span class="text-danger">180%</span> tambahan biaya sewa.
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turn pertamaku dimulai, pilih salah satu dari pilihan item untuk menggunakan item tersebut hingga permainan berakhir. Terdapat tiga pilihan item yang berbeda:
            <br>
            - [Detention Tarot Bear]: Saat muncul <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['56'] ?>">peringatan monopoli</a> oleh lawan, <span class="text-danger">95%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['38'] ?>">kurung penjara</a> lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali) / Saat lawan tiba di areaku, tagih <span class="text-danger">200%</span> tambahan biaya sewa.
            <br>
            - [Discharge Tarot Bear]: Saat lawan tiba di landmarkku, <span class="text-danger">75%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['23'] ?>">discharge</a> kepada lawan / Saat lawan tiba di areaku, tagih <span class="text-danger">200%</span> tambahan biaya sewa.
            <br>
            - [Destruction Tarot Bear]: Saat melempar dadu dan melewati area lawan, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['31'] ?>">hancurkan bangunan</a> dan hapus efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['10'] ?>">cat</a> / Saat lawan tiba di areaku, tagih <span class="text-danger">200%</span> tambahan biaya sewa.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>