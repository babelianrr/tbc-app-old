<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101312/c2021/evo-lulubel_e0mfny.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['9'] ?>">blok sudut</a>, <span class="text-danger">90%</span> pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['28'] ?>">fortune card lab</a> (fortune card lab &#58; setiap turnku dimulai, mendapat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['66'] ?>">special fortune card</a>).
            <br>
            &#10113; Saat tiba di <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['9'] ?>">blok sudut</a>, <span class="text-danger">85%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['54'] ?>">grand sky fall</a> lalu <span class="text-danger">90%</span> isi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['64'] ?>">shield</a> (maks. 1 lapis ) / Saat tiba di landmarkku, <span class="text-danger">80% </span><a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['36'] ?>">kendalikan</a> salah satu lawan secara acak.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; Saat melempar dadu dan melewati area lawan, <span class="text-danger">90%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['31'] ?>">hancurkan bangunan</a> dan hapus efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['10'] ?>">cat</a>.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>