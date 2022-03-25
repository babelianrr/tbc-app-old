<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-4" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101338/c2021/haryeong_cl5ifm.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di area yang terdapat bangunan, <span class="text-danger">50%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['175'] ?>">shackle</a> kepada salah satu lawan lalu pilih salah satu areaku untuk mengaktifkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['176'] ?>">earth vortex</a> / Saat lawan membangun landmark lebih dari 3 kali dalam satu turn, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['38'] ?>">kurung penjara</a> lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
            <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['48'] ?>">membangun</a> 3 bangunan, <span class="text-danger">30%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['57'] ?>">pindah ke posisi semula</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +10%) / Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">40%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['166'] ?>">dragon nest</a> di semua landmarkku.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-4" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101340/c2021/haryeong-awk_rqtlw2.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di area yang terdapat bangunan, <span class="text-danger">65%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['175'] ?>">shackle</a> kepada salah satu lawan lalu pilih salah satu areaku untuk mengaktifkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['176'] ?>">earth vortex</a> / Saat lawan membangun landmark lebih dari 3 kali dalam satu turn, <span class="text-danger">70%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['38'] ?>">kurung penjara</a> lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
            <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['48'] ?>">membangun</a> 3 bangunan, <span class="text-danger">40%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['57'] ?>">pindah ke posisi semula</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +10%) / Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">45%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['166'] ?>">dragon nest</a> di semua landmarkku.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-4" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101349/c2021/haryeong-evo_hplcys.png" alt="<?= $card['slug'] ?>-evo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di area yang terdapat bangunan, <span class="text-danger">85%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['175'] ?>">shackle</a> kepada salah satu lawan lalu pilih salah satu areaku untuk mengaktifkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['176'] ?>">earth vortex</a> / Saat lawan membangun landmark lebih dari 3 kali dalam satu turn, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['38'] ?>">kurung penjara</a> lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
            <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['48'] ?>">membangun</a> 3 bangunan, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['57'] ?>">pindah ke posisi semula</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +30%) / Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">60%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['166'] ?>">dragon nest</a> di semua landmarkku.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; Saat turnku dimulai, <span class="text-danger">90%</span> pilih salah satu area dalam jangkauan 8 blok di depan untuk melakukan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['150'] ?>">electromagnetic move</a>.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Witch Costume</h5>
          <p class="card-text">
            &#10112; Saat turnku dimulai, <span class="text-danger">90%</span> pilih salah satu area dalam jangkauan 8 blok di depan untuk melakukan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['150'] ?>">electromagnetic move</a> / <span class="text-danger">40%</span> batalkan serangan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['38'] ?>">kurung penjara</a> milik lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +15%).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>