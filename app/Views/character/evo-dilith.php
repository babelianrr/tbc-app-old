<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101322/c2021/evo-dilith_qe1wez.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['36'] ?>">kendalikan</a> salah satu lawan secara acak / Saat lawan tiba di areaku, <span class="text-danger">80%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['53'] ?>">multiplier tetap</a> x4.
            <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['49'] ?>">membangun</a>, <span class="text-danger">90%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['125'] ?>">benih landmark</a> / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['49'] ?>">membangun</a>, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['117'] ?>">isi energi</a> & Saat energi terisi penuh, langsung munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['126'] ?>">taman akar</a> di semua areaku.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume Skill</h5>
          <p class="card-text">
            &#10112; Saat melewati atau mendatangi blok keliling dunia baik dengan lemparan dadu atau dengan kartu kesempatan, <span class="text-danger">90%</span> bebas biaya sewa apabila tiba di area lawan dan segera pilih area untuk berangkat.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>