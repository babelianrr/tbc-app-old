<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100517/c2020/sophie-new_pxelk1.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <h5 class="card-title">Skill</h5>
          <p class="card-text">
            &#10112; <a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['0'] ?>">Ketepatan kontrol dadu</a> meningkat <span class="text-danger">53%</span> (<a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['55'] ?>">pertumbuhan ganjil genap</a> +15%) / Saat berangkat dari blok keliling dunia dan tiba di tujuan, <span class="text-danger">50%</span> mendapat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['14'] ?>">chance dadu tambahan</a>.
            <br>
            &#10113; Saat tiba di blok keliling dunia baik dengan hasil dadu maupun dengan kartu kesempatan, <span class="text-danger">60%</span> bebas biaya sewa apabila tiba di area lawan lalu segera pilih tujuan dan berangkat. Saat itu terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['124'] ?>">undangan blok sudut</a> selama 2 turn.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>