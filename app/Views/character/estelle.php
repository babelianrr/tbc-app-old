<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101470/c2021/estelle_igtqw4.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Chance dadu dobel meningkat <span class="text-danger">25%</span> / Saat dadu dobel tiga kali berturut-turut dalam satu turn, <span class="text-danger">80%</span> pergi ke START.
            <br>
            &#10113; Saat melempar dadu dobel, <span class="text-danger">50%</span> mendapat efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['39'] ?>">bebas sewa dan landmark destinasi</a> / Saat me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i START, <span class="text-danger">70%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['167'] ?>">prioritas konstruksi</a>&#62; (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 1 kali).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101462/c2021/estelle-awk_gqxr9d.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Chance dadu dobel meningkat <span class="text-danger">35%</span> / Saat dadu dobel tiga kali berturut-turut dalam satu turn, <span class="text-danger">90%</span> pergi ke START.
            <br>
            &#10113; Saat melempar dadu dobel, <span class="text-danger">70%</span> mendapat efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['39'] ?>">bebas sewa dan landmark destinasi</a> / Saat me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i START, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['167'] ?>">prioritas konstruksi</a>&#62; (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 1 kali).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101396/c2021/estelle-evo_wdrhv1.png" alt="<?= $card['slug'] ?>-evo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Chance dadu dobel meningkat <span class="text-danger">40%</span> / Saat dadu dobel tiga kali berturut-turut dalam satu turn, <span class="text-danger">95%</span> pergi ke START.
            <br>
            &#10113; Saat melempar dadu dobel, <span class="text-danger">80%</span> mendapat efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['39'] ?>">bebas sewa dan landmark destinasi</a> / Saat me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i START, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['167'] ?>">prioritas konstruksi</a>&#62; (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; Saat me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i START, mendapat gaji 4 kali lipat.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Patisserie Costume</h5>
          <p class="card-text">
            &#10112; Saat tiba di landmark lawan, <span class="text-danger">95%</span> bebas biaya sewa lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['10'] ?>">cat</a> selama 2 turn (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 1 kali). / <span class="text-danger">50%</span> bertahan dari serangan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['29'] ?>">kartu kesempatan</a> dan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['72'] ?>">tarik magnet</a>).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>