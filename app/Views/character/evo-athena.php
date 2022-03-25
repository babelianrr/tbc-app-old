<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101303/c2021/evo-athena_vp0cag.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['9'] ?>">blok sudut</a>, <span class="text-danger">85%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['101'] ?>">gempa line</a>, saat itu apabila lawan mendarat di areaku, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['32'] ?>">hancurkan dadu</a>. <br>
            &#10113; Saat tiba di <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['9'] ?>">blok sudut</a>, <span class="text-danger">75%</span> pilih <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['5'] ?>">area tim</a> untuk <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['91'] ?>">tarik magnet olimpiade</a> / Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke blok sudut atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['11'] ?>">blok spesial map</a>.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">55%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['85'] ?>">prioritas konstruksi</a>&#62;.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
  <?= $this->endSection() ?>