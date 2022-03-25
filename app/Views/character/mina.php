<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100493/c2020/mina_gb04jd.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a>, <span class="text-danger">50%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['133'] ?>">efek blok dark earth</a> di area yang dibangun serta satu blok depan dan belakang terdekat / Saat tiba di landmarkku, <span class="text-danger">45%</span> terapkan efek blok dark earth di area tersebut.
            <br>
            &#10113; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">35%</span> aktifkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['134'] ?>">Mina's Runaway</a> / Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">70%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['107'] ?>">kagebunshin</a> & Saat tiba di kagebunshin milikku, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['90'] ?>">panggil</a> salah satu lawan secara acak.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100505/c2020/mina-awk_p9oqom.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a>, <span class="text-danger">90%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['133'] ?>">efek blok dark earth</a> di area yang dibangun serta satu blok depan dan belakang terdekat / Saat tiba di landmarkku, <span class="text-danger">65%</span> terapkan efek blok dark earth di area tersebut.
            <br>
            &#10113; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">30%</span> aktifkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['134'] ?>">Mina's Runaway</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +40%) / Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">90%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['107'] ?>">kagebunshin</a> & Saat tiba di kagebunshin milikku, <span class="text-danger">85%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['90'] ?>">panggil</a> salah satu lawan secara acak.
          </p>
          <h5 class="card-title">Movement Catching Obsidian</h5>
          <p class="card-text">
            &#10112; Saat aku berdiri di atas landmarkku, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['71'] ?>">tangkap</a> lawan yang melewatiku.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>