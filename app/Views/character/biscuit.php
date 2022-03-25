<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100533/c2020/biscuit_rsjtgh.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan melempar dadu, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['127'] ?>">isi energi</a> / Saat turnku dimulai, <span class="text-danger">45%</span> pilih salah satu area dalam jangkauan 6 blok di depan untuk mengaktifkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['128'] ?>">bulldozer penggusuran</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['129'] ?>">jangkauan pergerakan meningkat</a> tergantung dengan energi yang terisi). <br>
            &#10113; Dalam turnku saat tiba di landmarkku, <span class="text-danger">30%</span> mendapat kartu kesempatan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['34'] ?>">isi ulang</a> / Saat me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i START, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['149'] ?>">prioritas konstruksi</a>&#62; (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 1 kali).
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100534/c2020/biscuit-awk_nftuqh.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan melempar dadu, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['127'] ?>">isi energi</a> / Saat turnku dimulai, <span class="text-danger">60%</span> pilih salah satu area dalam jangkauan 6 blok di depan untuk mengaktifkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['128'] ?>">bulldozer penggusuran</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['129'] ?>">jangkauan pergerakan meningkat</a> tergantung dengan energi yang terisi). <br>
            &#10113; Dalam turnku saat tiba di landmarkku, <span class="text-danger">50%</span> mendapat kartu kesempatan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['34'] ?>">isi ulang</a> / Saat me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i START, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['149'] ?>">prioritas konstruksi</a>&#62; (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
          </p>
          <h5 class="card-title">Select and Move Obsidian</h5>
          <p class="card-text">
            &#10112; Saat tiba di <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['9'] ?>">blok sudut</a>, <span class="text-danger">50%</span> pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['172'] ?>">kartu blok sudut</a> di semua blok spesial map.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>