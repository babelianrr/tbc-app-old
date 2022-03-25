<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648102342/c2022/jewol_z8nepy.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di areaku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a> areaku, <span class="text-danger">50%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['183'] ?>">efek blok lautan rembulan</a> di semua area dalam satu blok warna yang sama / Saat aku dan lawan melempar dadu dobel, <span class="text-danger">80%</span> isi energi (maks. 4) & saat energi terisi penuh, jatuhkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['184'] ?>">pecahan cahaya bulan</a> di semua area yang terdapat efek blok lautan bulan.
            <br>
            &#10113; <span class="text-danger">40%</span> bertahan dari <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['27'] ?>">efek berbahaya</a> yang diterapkan padaku (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 3 kali) / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a>, <span class="text-danger">30%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam line yang sama.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648102353/c2022/jewol-awk_swzd25.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di areaku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a> areaku, <span class="text-danger">70%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['183'] ?>">efek blok lautan rembulan</a> di semua area dalam satu blok warna yang sama / Saat aku dan lawan melempar dadu dobel, <span class="text-danger">80%</span> isi energi (maks. 4) & saat energi terisi penuh, jatuhkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['184'] ?>">pecahan cahaya bulan</a> di semua area yang terdapat efek blok lautan bulan.
            <br>
            &#10113; <span class="text-danger">60%</span> bertahan dari <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['27'] ?>">efek berbahaya</a> yang diterapkan padaku (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 3 kali) / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a>, <span class="text-danger">40%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam line yang sama.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648102351/c2022/jewol-evo_jjkbur.png" alt="<?= $card['slug'] ?>-evo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di areaku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a> areaku, <span class="text-danger">90%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['183'] ?>">efek blok lautan rembulan</a> di semua area dalam satu blok warna yang sama / Saat aku dan lawan melempar dadu dobel, <span class="text-danger">80%</span> isi energi (maks. 4) & saat energi terisi penuh, jatuhkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['184'] ?>">pecahan cahaya bulan</a> di semua area yang terdapat efek blok lautan bulan.
            <br>
            &#10113; <span class="text-danger">80%</span> bertahan dari <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['27'] ?>">efek berbahaya</a> yang diterapkan padaku (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 3 kali) / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a>, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam line yang sama.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; Saat lawan tiba di areaku, <span class="text-danger">85%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['173'] ?>">cahaya bulan</a> kepada lawan.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Imperial Costume</h5>
          <p class="card-text">
            &#10112; Saat lawan tiba di areaku, <span class="text-danger">85%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['173'] ?>">cahaya bulan</a> kepada lawan / <span class="text-danger">50%</span> batalkan skill <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">konstruksi landmark tambahan</a> milik lawan.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2022">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>