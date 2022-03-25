<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-4" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101329/c2021/gaia_rqcw2k.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku, <span class="text-danger">55%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['174'] ?>">efek blok mawar</a> / Saat tiba di landmarkku, <span class="text-danger">60% </span><a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['36'] ?>">kendalikan</a> salah satu lawan secara acak.<br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['49'] ?>">membangun</a>, <span class="text-danger">65%</span> bayar 5 kali biaya konstruksi landmark untuk langsung membangun landmark / Saat tiba di areaku, mendapat marble sebanyak <span class="text-danger">50%</span> biaya konstruksi & Dalam turnku saat tiba di landmarkku, <span class="text-danger">45%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['54'] ?>">grand sky fall</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-4" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101335/c2021/gaia-awk_j6xyem.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di area yang terdapat bangunan, <span class="text-danger">65%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['175'] ?>">shackle</a> kepada salah satu lawan lalu pilih salah satu areaku untuk mengaktifkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['176'] ?>">earth vortex</a> / Saat lawan membangun landmark lebih dari 3 kali dalam satu turn, <span class="text-danger">70%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['38'] ?>">kurung penjara</a> lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
            <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['48'] ?>">membangun</a> 3 bangunan, <span class="text-danger">40%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['57'] ?>">pindah ke posisi semula</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +10%) / Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">50%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['166'] ?>">dragon nest</a> di semua landmarkku.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-4" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101334/c2021/gaia-evo_hd9je0.png" alt="<?= $card['slug'] ?>-evo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku, <span class="text-danger">85%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['174'] ?>">efek blok mawar</a> / Saat tiba di landmarkku, <span class="text-danger">80% </span><a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['36'] ?>">kendalikan</a> salah satu lawan secara acak.<br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['49'] ?>">membangun</a>, <span class="text-danger">85%</span> bayar 5 kali biaya konstruksi landmark untuk langsung membangun landmark / Saat tiba di areaku, mendapat marble sebanyak <span class="text-danger">150%</span> biaya konstruksi &#38; Dalam turnku saat tiba di landmarkku, <span class="text-danger">65%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['54'] ?>">grand sky fall</a>.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; Saat lawan tiba di areaku, <span class="text-danger">85%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['173'] ?>">benih kutukan</a> kepada lawan.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Lotus Costume I</h5>
          <p class="card-text">
            &#10112; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a>, <span class="text-danger">40%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu areaku &#40;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> &#43;15%&#41; / Saat lawan tiba di areaku, <span class="text-danger">85%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['173'] ?>">benih kutukan</a> kepada lawan.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Lotus Costume II</h5>
          <p class="card-text">
            &#10112; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['76'] ?>">teleport</a>, <span class="text-danger">55%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['90'] ?>">panggil</a> lawan ke posisiku lalu nonaktifkan skill lawan &#40;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> &#43;30%&#41; / Saat lawan tiba di areaku, <span class="text-danger">85%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['173'] ?>">benih kutukan</a> kepada lawan.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>