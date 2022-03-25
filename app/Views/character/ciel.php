<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098863/c2019/ciel_txr6g8.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turnku dimulai, mendapat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['109'] ?>">construction tool</a> & saat melempar dadu dobel, <span class="text-danger">58%</span> mendapat construction tool tambahan / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> landmark dengan construction tool, pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['15'] ?>">checkpoint</a> di area yang diinginkan.
            <br>
            &#10113; Chance dadu dobel meningkat <span class="text-danger">35%</span> / Saat dadu dobel tiga kali berturut-turut dalam satu turn, <span class="text-danger">78%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['58'] ?>">pindah ke semua area</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098861/c2019/ciel-awk_gmzaww.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turnku dimulai, mendapat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['109'] ?>">construction tool</a> & saat melempar dadu dobel, <span class="text-danger">65%</span> mendapat construction tool tambahan / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> landmark dengan construction tool, pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['15'] ?>">checkpoint</a> di area yang diinginkan.
            <br>
            &#10113; Chance dadu dobel meningkat <span class="text-danger">35%</span> / Saat dadu dobel tiga kali berturut-turut dalam satu turn, <span class="text-danger">90%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['58'] ?>">pindah ke semua area</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098862/c2019/ciel-evo_fyzih2.jpg" alt="<?= $card['slug'] ?>-evo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turnku dimulai, mendapat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['109'] ?>">construction tool</a> & saat melempar dadu dobel, <span class="text-danger">80%</span> mendapat construction tool tambahan / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> landmark dengan construction tool, pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['15'] ?>">checkpoint</a> di area yang diinginkan. <br>
            &#10113; Chance dadu dobel meningkat <span class="text-danger">35%</span> / Saat dadu dobel tiga kali berturut-turut dalam satu turn, <span class="text-danger">95%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['58'] ?>">pindah ke semua area</a>.
          </p>
          <h5 class="card-title">Evolution Basic Costume</h5>
          <p class="card-text">
            &#10112; Setiap chance daduku, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['168'] ?>">pilih arah gerak</a> untuk melempar dadu.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2019">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>