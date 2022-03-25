<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100479/c2020/hanchaeryeong_wtxhke.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turnku dimulai atau saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">50%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['120'] ?>">area strategi</a> di salah satu area lawan / Saat tiba di area strategi, terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['121'] ?>">bom asap</a> & mendapat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['122'] ?>">item eksklusif</a>.
            <br>
            &#10113; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['76'] ?>">teleport</a>, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['123'] ?>">curi stat kontrol dadu</a> lawan / Dalam turnku saat tiba di areaku, <span class="text-danger">65%</span> mendapat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['22'] ?>">kartu kesempatan yang ditetapkan</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100483/c2020/hanchaeryeong-awk_uoimtl.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turnku dimulai atau saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">90%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['120'] ?>">area strategi</a> di salah satu area lawan / Saat tiba di area strategi, terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['121'] ?>">bom asap</a> & mendapat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['122'] ?>">item eksklusif</a>.
            <br>
            &#10113; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['76'] ?>">teleport</a>, <span class="text-danger">90%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['123'] ?>">curi stat kontrol dadu</a> lawan / Dalam turnku saat tiba di areaku, <span class="text-danger">80%</span> mendapat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['22'] ?>">kartu kesempatan yang ditetapkan</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100478/c2020/hanchaeryeong-evo_uzse8l.png" alt="<?= $card['slug'] ?>-evo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turnku dimulai atau saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">90%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['120'] ?>">area strategi</a> di salah satu area lawan / Saat tiba di area strategi, terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['121'] ?>">bom asap</a> & mendapat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['167'] ?>">titanium shield</a>.<br>
            &#10113; Saat tiba di landmarkku, <span class="text-danger">83%</span> bayar 70% biaya sewa dasar area tersebut untuk <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['91'] ?>">panggil</a> salah satu lawan / Saat melempar dadu, <span class="text-danger">55%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam jangkauan hasil dadu dan mendapat efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">konstruksi otomatis</a> landmark.
          </p>
          <h5 class="card-title">Evolution Basic Costume</h5>
          <p class="card-text">
            &#10112; Saat tiba di areaku, mendapat marble sebanyak <span class="text-danger">100%</span> biaya konstruksi area tersebut.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>