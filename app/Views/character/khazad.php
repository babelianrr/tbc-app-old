<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100488/c2020/khazad_pyqyj3.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['47'] ?>">membangun</a>, <span class="text-danger">40%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['135'] ?>">efek blok es</a> pada salah satu area kosong terdekat / Saat turnku berakhir ketika aku berdiri di atas landmarkku, <span class="text-danger">55%</span> pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['136'] ?>">duri es</a> di semua landmark milikku.
            <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['48'] ?>">membangun</a> 3 bangunan, <span class="text-danger">45%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['57'] ?>">pindah ke posisi semula</a> / Saat tiba di areaku, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['77'] ?>">teleport lalu panggil</a> ke salah satu area maksimal 8 blok di depan.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100488/c2020/khazad-awk_cvj0wg.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['47'] ?>">membangun</a>, <span class="text-danger">55%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['135'] ?>">efek blok es</a> pada salah satu area kosong terdekat / Saat turnku berakhir ketika aku berdiri di atas landmarkku, <span class="text-danger">80%</span> pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['136'] ?>">duri es</a> di semua landmark milikku. <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['48'] ?>">membangun</a> 3 bangunan, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['57'] ?>">pindah ke posisi semula</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +15%) / Saat tiba di areaku, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['77'] ?>">teleport lalu panggil</a> ke salah satu area maksimal 8 blok di depan.
          </p>
          <h5 class="card-title">Electric Discharge Obsidian</h5>
          <p class="card-text">
            &#10112; Saat lawan tiba di landmarkku, <span class="text-danger">50%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['23'] ?>">discharge</a> kepada lawan.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>