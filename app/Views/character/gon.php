<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101336/c2021/gon_xehmev.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di areaku, <span class="text-danger">50%</span> pilih salah satu area dalam jangkauan 12 blok untuk melakukan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['154'] ?>">powerful tackle</a> dan terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['155'] ?>">teror</a> kepada semua lawan dalam jangkauan perpindahan lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> area yang dibangun menjadi landmark. <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['48'] ?>">membangun</a> 3 bangunan, <span class="text-danger">30%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['57'] ?>">pindah ke posisi semula</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +10%) / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a>, <span class="text-danger">50%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['133'] ?>">efek blok dark earth</a> di area yang dibangun serta satu blok depan dan belakang terdekat.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101337/c2021/gon-awk_icyusv.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di areaku, <span class="text-danger">65%</span> pilih salah satu area dalam jangkauan 12 blok untuk melakukan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['154'] ?>">powerful tackle</a> dan terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['155'] ?>">teror</a> kepada semua lawan dalam jangkauan perpindahan lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> area yang dibangun menjadi landmark. <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['48'] ?>">membangun</a> 3 bangunan, <span class="text-danger">40%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['57'] ?>">pindah ke posisi semula</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +10%) / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a>, <span class="text-danger">70%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['133'] ?>">efek blok dark earth</a> di area yang dibangun serta satu blok depan dan belakang terdekat.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101337/c2021/gon-evo_yn2mjh.png" alt="<?= $card['slug'] ?>-evo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di areaku, <span class="text-danger">90%</span> pilih salah satu area dalam jangkauan 12 blok untuk melakukan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['154'] ?>">powerful tackle</a> dan terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['155'] ?>">teror</a> kepada semua lawan dalam jangkauan perpindahan lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> area yang dibangun menjadi landmark. <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['48'] ?>">membangun</a> 3 bangunan, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['57'] ?>">pindah ke posisi semula</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +30%) / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a>, <span class="text-danger">90%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['133'] ?>">efek blok dark earth</a> di area yang dibangun serta satu blok depan dan belakang terdekat.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; Saat tiba di areaku, <span class="text-danger">55%</span> isi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['64'] ?>">shield</a> (maks. 2 lapis).
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Ultimate Costume</h5>
          <p class="card-text">
            &#10112; Saat tiba di areaku, <span class="text-danger">55%</span> isi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['64'] ?>">shield</a> (maks. 2 lapis) / Dalam turnku saat tiba di landmarkku, <span class="text-danger">85%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['137'] ?>">bleeding</a> kepada lawan dalam line.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>