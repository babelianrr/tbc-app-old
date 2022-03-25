<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098867/c2019/fey_oix9uu.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan tiba di areaku, <span class="text-danger">65%</span> berikan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['112'] ?>">menu rahasia chef</a> lalu rebut 30% marble milik lawan.
            <br>
            &#10113; Saat tiba di areaku, <span class="text-danger">70%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['77'] ?>">teleport lalu panggil</a> ke salah satu area maksimal 8 blok di depan lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> area yang dibangun menjadi landmark.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098869/c2019/fey-awk_ynav4z.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan tiba di areaku, <span class="text-danger">78%</span> berikan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['112'] ?>">menu rahasia chef</a> lalu rebut 30% marble milik lawan.
            <br>
            &#10113; Saat tiba di areaku, <span class="text-danger">76%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['77'] ?>">teleport lalu panggil</a> ke salah satu area maksimal 8 blok di depan lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> area yang dibangun menjadi landmark.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098834/c2019/fey-evo_gpejsd.png" alt="<?= $card['slug'] ?>-evo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan tiba di areaku, <span class="text-danger">85%</span> berikan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['112'] ?>">menu rahasia chef</a> lalu rebut 30% marble milik lawan.
            <br>
            &#10113; Saat tiba di areaku, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['77'] ?>">teleport lalu panggil</a> ke salah satu area maksimal 8 blok di depan lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> area yang dibangun menjadi landmark.
          </p>
          <h5 class="card-title">Evolution Basic Costume</h5>
          <p class="card-text">
            &#10112; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">55%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['85'] ?>">prioritas konstruksi</a>&#62;.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2019">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>